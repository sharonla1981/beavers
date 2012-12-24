<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'file-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'file_id'); ?>
		<?php echo $form->textField($model,'file_id'); ?>
		<?php echo $form->error($model,'file_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'object_type_id'); ?>
		<?php echo $form->textField($model,'object_type_id'); ?>
		<?php echo $form->error($model,'object_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'object_id'); ?>
		<?php echo $form->textField($model,'object_id'); ?>
		<?php echo $form->error($model,'object_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_type_id'); ?>
		<?php echo $form->textField($model,'file_type_id'); ?>
		<?php echo $form->error($model,'file_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textField($model,'descr',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extention_id'); ?>
		<?php echo $form->textField($model,'extention_id'); ?>
		<?php echo $form->error($model,'extention_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->