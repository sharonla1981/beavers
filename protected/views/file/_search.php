<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'file_id'); ?>
		<?php echo $form->textField($model,'file_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'object_type_id'); ?>
		<?php echo $form->textField($model,'object_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'object_id'); ?>
		<?php echo $form->textField($model,'object_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_type_id'); ?>
		<?php echo $form->textField($model,'file_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descr'); ?>
		<?php echo $form->textField($model,'descr',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'path'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extention_id'); ?>
		<?php echo $form->textField($model,'extention_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->