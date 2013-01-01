<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">


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
				<a href="/beavers/index.php/user/registration">Register</a>
			</div>
		</form><!-- form -->
                <?php $this->endWidget(); ?>
</div>		      


