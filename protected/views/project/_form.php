<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>
<link href="css/login.css" rel="stylesheet">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>200,'placeholder'=>$model->getAttributeLabel('descr'))); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'type_id'); ?>
                <?php //echo $form->dropDownList('type_id',$model->type_id) ?>
		<?php echo $form->textField($model,'type_id',array('placeholder'=>$model->getAttributeLabel('type_id'))); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50,'placeholder'=>$model->getAttributeLabel('address'))); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id',array('placeholder'=>$model->getAttributeLabel('currency_id'))); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'planned'); ?>
		<?php echo $form->textField($model,'planned',array('placeholder'=>$model->getAttributeLabel('planned'))); ?>
		<?php echo $form->error($model,'planned'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'uom_id'); ?>
		<?php echo $form->textField($model,'uom_id',array('placeholder'=>$model->getAttributeLabel('uom_id'))); ?>
		<?php echo $form->error($model,'uom_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->