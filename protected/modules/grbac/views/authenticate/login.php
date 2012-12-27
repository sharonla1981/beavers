<?
$pageTitle = 'Login';
$pageRobots= "noindex, nofollow";
?>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableAjaxValidation'=>false,)); ?>
    <fieldset>
        <legend> Login Form </legend>
        <p>&nbsp;</p>

        <div class="row">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username',array('size'=>30,)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div><br />

        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password',array('size'=>30,)); ?>
            <?php echo $form->error($model,'password'); ?>
        </div><br />

        <div class="row">
            <?php echo $form->labelEx($model,'rememberMe'); ?>
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
        </div><br />

        <div class="row buttons">
            <?php echo CHtml::submitButton('Login'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'&nbsp;'); ?>
            Not registered <?= CHtml::link('Create an account', array('registration/register')); ?> |
            <?= CHtml::link('Forgot my password!', array('password/forgot',)); ?>
        </div><br />

      </fieldset>
    <?php $this->endWidget();?>
</div>