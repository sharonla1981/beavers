<?php
/**
 * AuthenticateController class file.
 * ----------------------------------
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */

class AuthenticateController extends GrbacController {
    /**
     * User authentication actions
     * 1. login
     * 2. logout
     **/

    public function init() {
        $this->metaNoCache = true;
    }

    /**
     * Displays login page to authenticate
     * @param $username string
     * @param $pasword  string
     */
    public function actionLogin() {
        $model=new User('login');
        $model->scenario='login';

        if(isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);
            // validates and authenticates
            if($model->validate())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        $this->render('login',array('model'=>$model));
    }

    /**
     * Logout the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}
