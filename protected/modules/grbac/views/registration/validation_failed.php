<?php
$this->pageTitle=Yii::app()->name . ' - Registration Disabled';
?>

<h2>validation failedd</h2><hr />
<p>You have already used this confirmation to reset password.  </p>
<p><?php echo CHtml::link('Send another reset request', CController::createUrl('forgot'))?></p>
 <?=$err?>
