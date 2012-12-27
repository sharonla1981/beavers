<? $this->pageTitle = 'Password reset successful'; ?>

<?php
 Yii::app()->clientScript->registerScript('refreshthepage',
            '$(document).ready(function(){setTimeout(function(){window.location="'.
            CHtml::normalizeUrl(array('/grbac/authenticate/login')).'"}, 8000)})',
            CClientScript::POS_READY);
?>

<h1>Password changed</h1>

<p>
Your password has been changed now. Your browser will be redirected to
login page in a few seconds.

Please click <?php echo CHtml::link('here', array('/grbac/authenticate/login')) ?> if that doesn't happen.
</p>