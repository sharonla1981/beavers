<?php $this->pageTitle=Yii::app()->name . ' - Forgot password';?>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'forgot-form','enableAjaxValidation'=>false,)); ?>
    <fieldset>
        <legend> Forgot password Form </legend>
        <p>Please supply either your username or email address and we will send a password reset link to your email address</p>

        <div class="row">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username',array('size'=>50,)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div><br />
        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>50,)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div><br /><br />

        <?php if(extension_loaded('gd')): ?>
        <div class="row">
                <?php echo $form->labelEx($model,'&nbsp;'); ?>
                <?php $this->widget('CCaptcha', array('showRefreshButton' => true)); ?>

        </div>
        <div class="row">
                <?php echo $form->labelEx($model,'&nbsp;'); ?>
            Please enter the letters as they are shown in the image above. Letters are not case-sensitive.
        </div>
        <div class="row">
                <?php echo $form->labelEx($model,'captcha'); ?>
                <?php echo $form->textField($model,'captcha',array('size'=>10, 'value'=>'', 'autocomplete'=>'off'));?>
                <?php echo $form->error($model,'captcha'); ?>
        </div>
        <?php endif; ?>
        <br />

        <div class="row buttons">
            <?php echo CHtml::submitButton('Reset Password'); ?>
        </div>
    </fieldset>
    <?php $this->endWidget();?>

</div>
