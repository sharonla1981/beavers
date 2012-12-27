<?php Yii::app()->clientScript->registerScriptFile("http://code.jquery.com/jquery-1.8.3.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile("http://cdn.kendostatic.com/2012.2.913/js/kendo.all.min.js"); ?>
<link href="http://cdn.kendostatic.com/2012.2.913/styles/kendo.default.min.css" rel="stylesheet">
<link href="http://cdn.kendostatic.com/2012.2.913/styles/kendo.common.min.css" rel="stylesheet"> 
<link href="css/login.css" rel="stylesheet">


<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<form action="">
			<h1>Login</h1>
			<div class="row">
                                
                                <?php echo $form->textField($model,'username',array('placeholder'=>'Username')); ?>
                                <?php echo $form->error($model,'username'); ?>
                        </div>
                        <div class="row">
                                
                                <?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
                                <?php echo $form->error($model,'password'); ?>
                        </div>
			<div>
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
			</div>
		</form><!-- form -->
                <?php $this->endWidget(); ?>
</div>		      


