<?php

class DefaultController extends Controller {
    public function actionIndex() {
        switch (true) {
            case (Yii::app()->user->isGuest):
                $this->redirect(CController::createUrl('/grbac/authenticate/login'));
                break;
            default : $this->redirect('account/my_account');
                break;
        }
    }
}
