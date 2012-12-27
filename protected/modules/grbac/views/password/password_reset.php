<?php $this->pageTitle = 'Reset your password'; ?>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'register-form','enableAjaxValidation'=>false,)); ?>
    <?//php echo CHtml::statefulForm(array('password-reset')); ?>
    <fieldset>
        <legend> Reset your password for <?=$model->username?> </legend><br />

        <div class="row">
            <?php echo $form->labelEx($model,'passwordNew'); ?>
            <?php echo $form->passwordField($model,'passwordNew',array('size'=>50,)); ?>
            <?php echo $form->error($model,'passwordNew'); ?>
        </div><br />

        <div class="row">
            <?php echo $form->labelEx($model,'passwordNew_repeat'); ?>
            <?php echo $form->passwordField($model,'passwordNew_repeat',array('size'=>50,)); ?>
            <?php echo $form->error($model,'passwordNew_repeat'); ?>
        </div>

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

        <div class="row buttons">
            <?php echo CHtml::submitButton('Reset Password'); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>
