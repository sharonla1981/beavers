<?php
$this->pageTitle=Yii::app()->name . ' - Register';
?>

<h2>Register - it's free and easy.</h2><hr />
Already a user? <?=CHtml::link('<b>Login</b>',  array('/grbac/authenticate/login'));?> <br /><br />


<h3>Registration Form</h3><hr />
<div class="gRow" title="r-form">
    <?php echo CHtml::form(); ?>
    <?$form->scenario='register';?>
    <div class="gCol" style='width:65%;'>
        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'username'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activeTextField($form,'username') ?> </div>
        </div>
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'email'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activeTextField($form,'email',array('maxlength'=>125)); ?> </div>
        </div>
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'passwordNew'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activePasswordField($form,'passwordNew',array('maxlength'=>45, 'autocomplete'=>'off')); ?> </div>
        </div>        
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'passwordNew_repeat'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activePasswordField($form,'passwordNew_repeat',array('maxlength'=>45, 'autocomplete'=>'off')); ?> </div>
        </div>
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'&nbsp;'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activeCheckBox($form,'rememberMe'); ?> Send me updates ... </div>
        </div>
        <div style="clear:both"></div>

        <?php if(extension_loaded('gd')): ?>
        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'&nbsp;'); ?> </div>
            <div class="gCol"> <?php $this->widget('CCaptcha', array('showRefreshButton' => true)); ?> </div>
        </div>
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'&nbsp;'); ?> </div>
            <div class="gCol"> Enter the letters as shown in the image above </div>
        </div>
        <div style="clear:both"></div>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'captcha'); ?> </div>
            <div class="gCol"> <?php echo CHtml::activeTextField($form, 'captcha', array('size'=>10, 'value'=>'', 'autocomplete'=>'off')); ?> </div>
        </div>
        <div style="clear:both"></div>
        <?php endif; ?>

        <div class="gRow">
            <div class="gCol"> <?php echo CHtml::activeLabelEx($form,'&nbsp;'); ?> </div>
            <div class="gCol"> <?php echo CHtml::submitButton('Register'); ?> </div>
        </div>

    </div>

    <div class="gCol">
        <div class="gRow">
            <h4><a href="#">Privacy Policy</a></h4>
            <?php echo CHtml::errorSummary($form); ?>
        </div>
    </div>
    </form>
</div>