<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css"/>
<?php 
/*$this->pageTitle = Yii::app()->name . ' - '.Yum::t( 'Registration');
$this->title = Yum::t('Registration');
$this->breadcrumbs = array(Yum::t('Registration')); */
?>

<div class="form">
<?php /*$form = $this->beginWidget('CActiveForm', array(
			'id'=>'registration-form',
			'enableAjaxValidation'=>true,
			'focus'=>array($userForm,'username'),
			));  */
?>

<?php //echo Yum::requiredFieldNote(); ?>
<?php //echo CHtml::errorSummary(array($userForm, $profile)); ?>

<div class="row">
<?php
//echo $form->labelEx($userForm,'username');
echo $form->textField($userForm,'username',array('placeholder'=>'User Name'));
echo $form->error($userForm,'username');
?>
</div>
<div class="row"> <?php
//echo $form->labelEx($profile,'email');
//echo $form->textField($profile,'email',array('placeholder'=>'Email Address'));
?> </div>  

<div class="row"> <?php
//echo $form->labelEx($profile,'firstname');
//echo $form->textField($profile,'firstname',array('placeholder'=>'First Name'));
?> </div>  

<div class="row"> <?php
//echo $form->labelEx($profile,'lastname');
//echo $form->textField($profile,'lastname',array('placeholder'=>'Last Name'));
?> </div>  
<?php  
$profileFields = YumProfileField::model()->forRegistration()->sort()->findAll();

if ($profileFields) {
	foreach($profileFields as $field) {
?>
			<div class="row">
<?php
		if ($field->range) 
		{
                                
				echo $form->labelEx($profile, $field->varname);
				echo $form->dropDownList($profile,
					$field->varname,
					YumProfile::range($field->range));
                                echo $form->error($profile,$field->varname);
		}
		elseif ($field->field_type == "TEXT")
		{
			//echo $form->labelEx($profile, $field->varname);
                        
			echo $form->textField($profile,
					$field->varname,
					array('rows'=>1, 'cols'=>30,'placeholder'=>$field->title));
                        echo $form->error($profile,$field->varname);
		}
		elseif ($field->field_type == "DROPDOWNLIST")
		{
			if($field->required == 2)
				$req = array('empty' => '--');
			else
				$req = array();
			echo CHtml::activeDropDownList($profile,
					$field->varname,
					CHtml::listData(CActiveRecord::model(ucfirst($field->varname))->findAll(),
						'id',
						$field->related_field_name), $req);

		}
		else 
		{
			echo CHtml::activeLabelEx($profile, $field->varname);
			echo CHtml::activeTextField($profile,
					$field->varname,
					array(
						'size'=>60,
						'maxlength'=>(($field->field_size)?$field->field_size:255)));
                                        echo $form->error($profile,$field->varname);
		}
		?>
			</div>  
			<?php
	}
} 
 ?>
	<div class="row">
	<?php //echo $form->labelEx($userForm,'password'); ?>
	<?php echo $form->passwordField($userForm,'password',array('placeholder'=>'Password')); ?>
        <?php echo $form->error($userForm,'password'); ?>
	</div>

<div class="row">
	<?php //echo $form->labelEx($userForm,'verifyPassword'); ?>
	<?php echo $form->passwordField($userForm,'verifyPassword',array('placeholder'=>'Retype Password')); ?>
        <?php echo $form->error($userForm,'verifyPassword'); ?>
	</div>

	
	<?php if(extension_loaded('gd') && Yum::module()->enableCaptcha): ?>
	<div class="row">
		<?php echo CHtml::activeLabelEx($userForm,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo CHtml::activeTextField($userForm,'verifyCode',array('placeholder'=>'Captcha')); ?>
		</div>
		<p class="hint"><?php echo Yum::t('Please enter the letters as they are shown in the image above.'); ?>
		<br/><?php echo Yum::t('Letters are not case-sensitive.'); ?></p>
	</div>
	<?php endif; ?>
</div><!-- form -->

	<?php /*
	<div class="row submit">
		<?php echo CHtml::submitButton(Yum::t('Registration')); ?>
	</div>

<?php //$this->endWidget(); ?>
</div><!-- form -->
