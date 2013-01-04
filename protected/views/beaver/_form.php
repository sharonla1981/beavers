<?php
/* @var $this BeaverController */
/* @var $model Beaver */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<?php Yii::app()->clientScript->registerScriptFile("http://code.jquery.com/jquery-1.8.3.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile("http://code.jquery.com/ui/1.9.2/jquery-ui.js"); ?>

<div id="tabs">
        <ul>
            <li><a href="#tabs-1">Basic Project's Details</a></li>
            <li><a href="#tabs-2">Personal Details</a></li>
            <li><a href="#tabs-3">Confirm</a></li>
        </ul>
        
    </div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beaver-form',
	'enableAjaxValidation'=>false,
)); ?>
    
<?php /*
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        */?>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>