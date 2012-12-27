<?php
/**
 * AdminController class file.
 * ---------------------------
 * partially implemented!
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */
class AdminController extends RegistrationController {
    const PAGE_SIZE=15;

    public $defaultAction='manage';

    public function init() {
        if ((isset(Yii::app()->user->Admin))
                ||(isset(Yii::app()->user->Authority))) {
            $this->layout="grbac_admin";
        } else {
            die('admin! Not allowed....');
        }
    }


    public function actions() {
        return array('captcha'=>array('class'=>'CCaptchaAction', 'backColor'=>0xFFFFFF, 'testLimit'=>1),);
    }

    /**
     * Displays the login page
     */
    public function actionManage() {
        $actives   = User::model()->count('active=1');
        $inactives = User::model()->count('active=0');
        $this->render('manage', array('actives'=>$actives,'inactives'=>$inactives));
    }

    public function actionGoHome() {
        $this->redirect(Yii::app()->homeUrl);
    }


    public function actionManage_actives() {
        $criteria=new CDbCriteria;
        $criteria->condition = "active=1";

        $pages=new CPagination(User::model()->count($criteria));
        $pages->pageSize=self::PAGE_SIZE;
        $pages->applyLimit($criteria);

        $sort=new CSort('User');
        $sort->applyOrder($criteria);

        $users=User::model()->findAll($criteria);
        $this->render('manage_actives', array('users'=>$users,'pages'=>$pages,'sort'=>$sort,'active'=>true));
    }

    public function actionManage_inactives() {
        $criteria=new CDbCriteria;
        $criteria->condition = "active=0";

        $pages=new CPagination(User::model()->count($criteria));
        $pages->pageSize=self::PAGE_SIZE;
        $pages->applyLimit($criteria);

        $sort=new CSort('User');
        $sort->applyOrder($criteria);

        $users=User::model()->findAll($criteria);
        $this->render('manage_actives', array('users'=>$users,'pages'=>$pages,'sort'=>$sort,'active'=>false));
    }

    public function actionAdmin_create_user() {
        $this->actionRegister();
    }

    public function actionAdmin_password_change() {
        $user = new RegisterForm('login');
        $this->render('create',array('model'=>$user));
    }

    /* item actions */
    public function actionToggle_active() {
        $user= User::model()->findbyPk($id!==null ? $id : $_POST['id']);
        $user->scenario = 'togle';
        if ($user->active==1) $user->active = 0; else $user->active=1;
        $user->save();
    }

    public function actionUser_edit() {
        $id = $_GET['id'] ? $_GET['id'] : $_POST['GALogin']['id'];
        $this->redirect(array('account/update_information','id'=>$id));
    }

}
