<?php
/**
 * RegistrationController class file
 * ---------------------------------
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */
class RegistrationController extends GrbacController {
    /**
     * User Registration and Email Confirmation
     * 1. Resgister using Short/Long form
     * 2. Validate
     * 3. Register_passive internally used by application
     **/

    public function init() {
        parent::init();
        $this->pageTitle = 'User Register and Validation';
        $this->metaRobots="index, nofollow";
        $this->metaDescription = 'User Register and Validation';
        $this->metaNoCache = true;
    }

    public function actions() {
        return array('captcha'=>array('class'=>'CCaptchaAction'
                        ,'backColor'=>0xFFFFFF
                        ,'foreColor'=>0x62CCFF
                        ,'testLimit'=>1),);
    }

    /*
    * Registration
    */
    public function actionRegister() {
        // New member registration is disabled
        if(!$this->module->enableRegistration) {
            $this->render('register_disabled');
            return;
        }

        // Use Short or Long form for user registration
        switch ($this->module->registerForm) {
            case 'long' : //enter username, password1 password2, email, ...
                echo 'to do :: long form ()';
                break;
            case 'short': //enter email
                $this->registerShortForm();
                break;
        }
    }


    /**
     * Registration confirmation/Email veririfation and Migration to user form temp
     */
    public function actionValidate() {
        //Check validation status, fail:die, pass:return Usertemp
        $usertemp = $this->chk_validCode();

        $password_temp = 'TP'.$this->get_RandKey(8,8);

        // Create User from Usertemp, fail:notify admin, pass:return User
        $user = $this->make_UserFromUsertemp($usertemp, $password_temp);

        if ($user) {
            $this->srbac_createDefautRole($user->uid);
            $this->migrate_relatedModelData($oldUID=$usertemp->uid, $newUID=$user->uid);

            $usertemp->delete();

            // Send email with temp username and password auto created
            $this->sendEmail_validationSuccess($user, $password_temp);

            // Auto Login
            if (Yii::app()->getModule('grbac')->autoLogin) {
                $identity = new UserIdentity($user->username, $password_temp);
                $identity->authenticate();
                Yii::app()->user->login($identity, $duration=0); // Do not remember Auto login user
            }

            // Render Success page
            if ($this->module->registerForm=='short')
                $this->render('register_success_short');
            else
                $this->render('register_success_long');
        }
    }


    /*
    * Short Registration form
    */
    public function registerShortForm() {
        $model = new Usertemp('register');
        $model->scenario='register';
        //$this->performAjaxValidation($model);

        if(isset($_POST['Usertemp'])) {
            $model->setAttributes($_POST['Usertemp']);
            if($model->validate()) {
                if ($this->register_passive_usertemp($model->email, $model)) {
                    $this->render('register_confirm',array('model'=>$model));
                    return;
                }
            }
        }
        $this->render('register_short',array('model'=>$model));
    }

    private function srbac_createDefautRole($newUID) {
        $defaultRole = Yii::app()->getModule('grbac')->defaultRole;
        if (!empty($defaultRole)) {
            $auth = Yii::app()->authManager;
            $auth->assign($defaultRole, $userid=$newUID , $bizRules=null, $data=null);
        }
    }

    private function sendEmail_validationSuccess($user, $password_temp) {
        $template = 'application.modules.grbac.components.etemplates/validate_success';
        $this->email_subject = 'Account Validated';
        $this->email_text    = $this->renderPartial($template, array('model'=>$user, 'password'=>$password_temp), true, false);
        $this->email_to      = $user->email;
        $this->email_toName  = $user->email;
        $this->sendEmail();
    }


    private function migrate_relatedModelData($oldUID, $newUID) {
        $this->loadRelatedModels();
        foreach ($this->relatedModels as $item) {
            $modelName = $item['modelName'];
            $model = $modelName::model()->findAll('uid=:oldUID AND active=0', array(':oldUID'=>$oldUID));
            foreach ($model as $row) {
                //
            }
        }
        return true;
    }

    private function make_UserFromUsertemp($usertemp, $password_temp) {
        // auto created default role in User::afterSave()
        $model = new User;
        $model->is_temp_passwd= true;
        $model->email    = $usertemp->email;
        $model->username = 'TU'.rand(100000,999999); // 8 char temp user name
        $model->created  = $usertemp->created;
        $model->verified = $model->dt_passchg = date("Y-m-d H:i:s");
        $model->ip1      = $usertemp->ip1; // IP registered from
        $model->ip2      = $model->ip = Yii::app()->request->userHostAddress; // IP loged in from
        $model->salt     = date("YmdH",strtotime($usertemp->created));
        $model->algo     = Yii::app()->getModule('grbac')->hashAlgo;
        $model->password = hash($model->algo, $password_temp.$model->salt);
        $model->active   =1;
        if ($model->insert())
            return $model;
        else {
            die('TO DO: trap error here! Send email to admin with data(usertemp)');
            return false;
        }
    }

    /**
     *
     */
    private function chk_validCode() {
        // intercept params from the URL and check validation status
        $v = (isset($_GET['valid_code'])) ? $_GET['valid_code'] : false;

        if (!$v) {
            $this->render('validation_failed',array('err'=>'Invalid request, missing validation code'));
            die;
        }

        $usertemp=Usertemp::model()->find('valid_code=:V', array(':V'=>$v));
        if($usertemp === null) {
            $this->render('validation_failed',array('err'=>'Invalid Code or account already validated'));
            die;
        }

        return $usertemp;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if(isset($_POST['ajax']) && $_POST['ajax']==='register-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
