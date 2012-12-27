<?php
$this->pageTitle=Yii::app()->name . ' - Forgot password';
$msg = "Please supply either your username or email address and
           we will send a Temporary password to your email address";
$this->renderPartial('forms/_forgotForm', array('msg'=>$msg, 'model'=>$model));
?>
