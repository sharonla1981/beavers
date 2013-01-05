<?php
/* @var $this BeaverController */
/* @var $model Beaver */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beaver-form',
	'enableAjaxValidation'=>true,
        //'focus'=>array($userForm,'username'),
)); ?>

        <?php echo $form->errorSummary(array($model,$project,$userForm,$profile)); ?>
    
        <?php echo $this->renderPartial('/project/_form',array('model'=>$project,'form'=>$form)); ?>
      
        
      
        <?php echo $this->renderPartial('user.views.registration.registration',array('form'=>$form,'userForm'=>$userForm,'profile'=>$profile)); ?>    
       
        
    </div>
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
        
    });
    </script>