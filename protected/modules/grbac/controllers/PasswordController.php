<?php
/**
 * PasswordController class file
 * -----------------------------
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */
class PasswordController extends GrbacController {
    /**
     * User authentication
     * 1. pasword Forgot, send temporary password or reset password
     * 2. passsord recovery confirm and reset
     **/

    public function actions() {
        return array('captcha'=>array('class'=>'CCaptchaAction', 'backColor'=>0xFFFFFF, 'testLimit'=>1),);
    }

    public function init() {
        $this->metaNoCache = true;
    }

    /**
     * Send new password
     * @param username or email
     */

    public function actionForgot() {
        switch (true) {
            case ($this->module->passwordForgot=='temp_password') :
                $this->sendTempPassword();
                break;
            case ($this->module->passwordForgot=='reset') :
                $this->sendValidationForReset();
                break;
            default:
                die('passwordForgot must be temp_password or reset');
                break;
        }
    }

    /**
     * This process may change password for some other user.
     * Not fully implemented
     */
    public function sendTempPassword() {
        $model=new User;
        $model->scenario = 'temp_password';

        if(isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);
            if($model->validate() ) {
                // Set user with new password. Validation returns UID for user match
                $password_temp = $this->get_RandKey(10);
                $user = $this->upd_userNewPassword($model->uid, $password_temp);

                // Send email
                $template = 'application.modules.grbac.components.etemplates/forgot_temppw';
                $this->email_subject = 'New passsword';
                $this->email_text    = $this->renderPartial($template, array('model'=>$user, 'password'=>$password_temp), true, false);
                $this->email_to      = $model->email;
                $this->email_toName  = $model->email;
                $this->sendEmail();

                $this->render('password_temppw_success',array('model'=>$user));
                return true;

            }
        }
        $this->render('forgot_temppw',array('model'=>$model));
    }

    public function upd_userNewPassword($UID, $password_temp) {
        $IP = Yii::app()->request->userHostAddress;

        $user = User::model()->find('uid='.$UID);
        $PW   = hash($user->algo, $password_temp.$user->salt);

        $sql = "UPDATE users SET dt_passchg=now(), ip='$IP', password='$PW' WHERE uid=$UID";

        $yDB = Yii::app()->db;
        $yDB->createCommand($sql)->execute();

        return $user;
    }


    /**
     * Password reset with validation process
     * send email with validation code to reset password
     * @param username or email
     */
    public function sendValidationForReset() {
        $model=new User;
        $model->scenario = 'forgot-reset';

        if(isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);

            if( ($model->validate()) && ($model->uid) ) {

                $user = User::model()->findByPK($model->uid);
                $user->valid_code = $model->valid_code = $this->get_RandKey();
                $user->save();

                $UserProfile = Userprofile::model()->findByPk($model->uid);
                if ($UserProfile)
                    $this->email_toName = $UserProfile->name_f . ' '. $UserProfile->name_l;
                else
                    $this->email_toName = $model->username;

                $template = 'application.modules.grbac.components.etemplates/forgot_reset';
                $this->email_subject = 'Forgot Password Request';
                $this->email_text    = $this->renderPartial($template, array('model'=>$model), true, false);
                $this->email_to      = $model->email;

                $this->sendEmail();
                $this->render('forgot_reset_confirm',array('model'=>$model));
                return;
            }
        }

        $this->render('forgot_reset',array('model'=>$model));
    }


    /**
     * confirm and validate password reset request
     * @param username
     * @param valid_code
     */
    public function actionValidate() {
        $user = User::model()->findByAttributes(array(
                'valid_code'=>$_GET['valid_code']));

        if($user === null) {
            $this->render('validation_failed');
            die;;
        }

        Yii::app()->user->setState('uid', $user->uid);
        $this->redirect(CController::createUrl('password_reset'));
    }

    /**
     * resets user's password after successfull  validation in actionValidate()
     * requires valid page state variables to be set
     */
    public function actionPassword_reset() {
        $uid   = Yii::app()->user->getState('uid');

        $model = User::model()->findByPk($uid);
        $model->scenario ='password-reset';

        if(isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);

            if($model->validate()) {
                $model->valid_code = null;
                $model->password = hash($model->algo,$model->passwordNew.$model->salt);
                if ($model->save()) {
                    $this->render('password_reset_success');
                    return;
                }
            }
        }
        $this->render('password_reset', array('model'=>$model));
    }
}
