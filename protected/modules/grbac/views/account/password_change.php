<br />

<div class="gRow">
    <div class="gCol" style="width:33%">
        <h2>User Updates</h2>
        <?php echo $this->renderPartial('user_updates/_menu');?>
    </div>

    <div class="gCol" style="width:33%">
       <h2>Dashboard for activities</h2>
    </div>

    <div class="gCol" style="width:33%">
       <h2>Dashboard for reports</h2>
    </div>

</div>
<div style="clear:both"></div>

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'password_change','enableAjaxValidation'=>true,)); ?>

<div class="form">
    <fieldset>
        <legend> Change password for: <?php echo $model->username; ?>
	         Already a user? <?=CHtml::link('<b>Login</b>',CController::createUrl('authenticate/login'));?>&nbsp;&nbsp;&nbsp;
            <span class="required">*</span> are required fields.
        </legend><br />

        <div class="row">
            <?php echo $form->labelEx($model,'passwordOld'); ?>
            <?php echo $form->passwordField($model,'passwordOld',array('size'=>50,)); ?>
            <?php echo $form->error($model,'passwordOld'); ?>
        </div><br />

        <div class="row">
            <?php echo $form->labelEx($model,'passwordNew'); ?>
            <?php echo $form->passwordField($model,'passwordNew',array('size'=>50,)); ?>
            <?php echo $form->error($model,'passwordNew'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'passwordNew_repeat'); ?>
            <?php echo $form->passwordField($model,'passwordNew_repeat',array('size'=>50,)); ?>
            <?php echo $form->error($model,'passwordNew_repeat'); ?>
        </div><br />


        <div class="row buttons">
            <?php echo CHtml::submitButton('Change'); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>

</div>

