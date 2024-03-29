<?php 
$this->pageTitle = Yii::app()->name . ' - '.Yum::t( "Profile");
$this->breadcrumbs=array(
		Yum::t('Profile') => array('profile'),
		Yum::t('Edit profile'));
$this->title = Yum::t('Edit profile');
?>

<div class="form">

<?php echo CHtml::beginForm(); ?>

<?php echo Yum::requiredFieldNote(); ?>

<?php echo CHtml::errorSummary(array($user, $profile)); ?>

<div class="row">
<?php echo CHtml::activeLabelEx($user,'username'); ?>
<?php echo CHtml::activeTextField($user,'username',array(
			'size'=>20,'maxlength'=>20)); ?>
<?php echo CHtml::error($user,'username'); ?>
</div>

<?php if(isset($profile) && is_object($profile)) 
	$this->renderPartial('/profile/_form', array('profile' => $profile)); ?>

	<div class="row buttons">
	<?php

	if(Yum::module()->enablePrivacysetting)
		echo CHtml::button(Yum::t('Privacy settings'), array(
					'submit' => array('/user/privacy/update'))); ?>

	<?php 
		if(Yum::module()->enableAvatar)
			echo CHtml::button(Yum::t('Upload avatar Image'), array(
				'submit' => array('/user/avatar/editAvatar'))); ?>

	<?php echo CHtml::submitButton($user->isNewRecord 
			? Yum::t('Create my profile') 
			: Yum::t('Save profile changes')); ?>
	</div>

	<?php echo CHtml::endForm(); ?>

	</div><!-- form -->
