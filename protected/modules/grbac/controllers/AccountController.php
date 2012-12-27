<?php
/**
 * AccountController class file
 * ----------------------------
 * All activities that user can perform on thier account + access to panel
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */
class AccountController extends GrbacController {
    /**
     * User authentication
     * 1. my account - dashboard + panel for the user
     * 2. passsord reset
     **/
    public $defaultAction='MyAccount';
    public $_model;

    public function init() {
        parent::init();
    }

    public function actionView() {
        $this->render('view',array(
                'model'=>$this->load_UPModel(),
        ));
    }
    /**
     * Displays the my account page to change password user info etc.
     */
    public function actionMyaccount() {
       // if (isset(Yii::app()->user->Admin))
        //$this->layout="grbac_admin";
        $this->render('my_account');
    }

    /**
     * Change user password
     * @param passwordNew string
     * @param paswwordNew_repeat string
     */
    public function actionPassword_change() {
        //Get the user moddel data
        $UID   = Yii::app()->user->id;
        $model = User::model()->find('uid='.$UID);
        $model->scenario='password_change';
        $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);
            if ($model->validate()) {
                $PW  = hash($model->algo, $model->passwordNew.$model->salt);
                $IP  = Yii::app()->request->userHostAddress;
                $sql = "UPDATE users SET dt_passchg=now(), ip='$IP', password='$PW' WHERE uid=$UID";
                $yDB = Yii::app()->db;
                $yDB->createCommand($sql)->execute();
                $this->render('password_changed',array('model'=>$model));
                return;
            }

        }
        $this->render('password_change',array('model'=>$model));
    }

    public function actionUpdate_information() {
        $model=$this->load_UPModel();

        // $this->performAjaxValidation($model);

        if(isset($_POST['Userprofile'])) {
            $model->attributes=$_POST['Userprofile'];
            $model->uid = Yii::app()->user->id;
            if($model->save())
                $this->redirect(array('view','id'=>$model->uid));
        }

        $this->render('create_update',array(
                'model'=>$model,
        ));
    }

    public function actionDeleteAccount() {
        //
    }

    public function load_UPModel() {
        $UID   = Yii::app()->user->id;
        $this->_model=Userprofile::model()->findbyPk($UID);
        if(!$this->_model) {
            $this->_model=new Userprofile;
            $this->_model->uid = $UID;
        }
        return $this->_model;
    }
    protected function performAjaxValidation($model) {
        if(isset($_POST['ajax']) && $_POST['ajax']==='password_change') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
