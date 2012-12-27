<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userprofile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_f'); ?>
		<?php echo $form->textField($model,'name_f',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_m'); ?>
		<?php echo $form->textField($model,'name_m',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_l'); ?>
		<?php echo $form->textField($model,'name_l',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name_l'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->