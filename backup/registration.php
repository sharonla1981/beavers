<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css"/>
<?php 
$this->pageTitle = Yii::app()->name . ' - '.Yum::t( 'Registration');
$this->title = Yum::t('Registration');
//$this->breadcrumbs = array(Yum::t('Registration'));
?>

<div class="form">
<?php $activeform = $this->beginWidget('CActiveForm', array(
			'id'=>'registration-form',
			'enableAjaxValidation'=>true,
			'focus'=>array($form,'username'),
			));
?>

<?php //echo Yum::requiredFieldNote(); ?>
<?php echo CHtml::errorSummary(array($form, $profile)); ?>

<div class="row">
<?php
//echo $activeform->labelEx($form,'username');
echo $activeform->textField($form,'username',array('placeholder'=>'User Name'));
?>
</div>
<div class="row"> <?php
//echo $activeform->labelEx($profile,'email');
//echo $activeform->textField($profile,'email',array('placeholder'=>'Email Address'));
?> </div>  

<div class="row"> <?php
//echo $activeform->labelEx($profile,'firstname');
//echo $activeform->textField($profile,'firstname',array('placeholder'=>'First Name'));
?> </div>  

<div class="row"> <?php
//echo $activeform->labelEx($profile,'lastname');
//echo $activeform->textField($profile,'lastname',array('placeholder'=>'Last Name'));
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
				echo $activeform->labelEx($profile, $field->varname);
				echo $activeform->dropDownList($profile,
					$field->varname,
					YumProfile::range($field->range));
		}
		elseif ($field->field_type == "TEXT")
		{
			//echo $activeform->labelEx($profile, $field->varname);
			echo $activeform->textField($profile,
					$field->varname,
					array('rows'=>1, 'cols'=>30,'placeholder'=>$field->title));
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
		}
		?>
			</div>  
			<?php
	}
} 
 ?>
	<div class="row">
	<?php //echo $activeform->labelEx($form,'password'); ?>
	<?php echo $activeform->passwordField($form,'password',array('placeholder'=>'Password')); ?>
	</div>

<div class="row">
	<?php //echo $activeform->labelEx($form,'verifyPassword'); ?>
	<?php echo $activeform->passwordField($form,'verifyPassword',array('placeholder'=>'Retype Password')); ?>
	</div>

	
	<?php if(extension_loaded('gd') && Yum::module()->enableCaptcha): ?>
	<div class="row">
		<?php echo CHtml::activeLabelEx($form,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo CHtml::activeTextField($form,'verifyCode'); ?>
		</div>
		<p class="hint"><?php echo Yum::t('Please enter the letters as they are shown in the image above.'); ?>
		<br/><?php echo Yum::t('Letters are not case-sensitive.'); ?></p>
	</div>
	<?php endif; ?>
	
	<div class="row submit">
		<?php echo CHtml::submitButton(Yum::t('Registration')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
