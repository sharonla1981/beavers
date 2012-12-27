<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'register-form','enableAjaxValidation'=>false,)); ?>

    <fieldset>
        <legend> Registration Form. &nbsp;&nbsp;&nbsp;
	         Already a user? <?=CHtml::link('<b>Login</b>',CController::createUrl('authenticate/login'));?>&nbsp;&nbsp;&nbsp;
            <span class="required">*</span> are required fields.
        </legend><br />

        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>50,)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div><br />

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
            <?php echo CHtml::submitButton('Register'); ?>
            <?//php echo CHtml::submitButton('Register',array('type'=>'submit')); ?>
        </div>
        bug: Captcha validation fails when enableAjaxValidation=true
    </fieldset>
    <?php $this->endWidget(); ?>
    
</div>

