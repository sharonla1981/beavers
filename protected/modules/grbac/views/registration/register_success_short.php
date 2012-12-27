<? $this->pageTitle = 'Registeration successful'; ?>

<?php
if (Yii::app()->getModule('grbac')->autoLogin)
    Yii::app()->clientScript->registerScript('refreshthepage',
            '$(document).ready(function(){setTimeout(function(){window.location="'.
            CHtml::normalizeUrl(array('/grbac/account/myaccount')).'"}, 6000)})',
            CClientScript::POS_READY);
?>
<h2>Registration complete</h2><hr />
<p>Thank you for confirming your registering at <?php echo Yii::app()->name;?>! </p><br />
<p>Your temp password has been emailed to you. Please change it. Now you are being auto logged in</p>

<p>Your browser will be redirected to login page in a few seconds. If it does not, Please click <?php echo CHtml::link('here', array('/grbac/authenticate/login')) ?>.
</p>
