<?php
$this->widget('application.modules.grbac.components.Email_template', 
        array('state'=>'good'
        ,'view'=>'header'
        ,'title'=>'Password Reset Request'
        ,'result'=>'Password Reset Request'
        ,'short_msg'=>'Follow the link to make new password.'
));

$link = Yii::app()->request->getHostInfo().CHtml::normalizeUrl(array('validate',
        'valid_code'=>$model->valid_code));
?>

<p>Hello <?php echo $model->username?>,</p><br />

<p>We have receieved a password reset from IP <?php $model->ip ?></p>

<p>If this is a valid request, you must <a href="<?=$link?>" rel='follow'>verify by clicking here.</a> to make new password </p><br />

<? $this->widget('application.modules.grbac.components.Email_template', array('state'=>'good','view'=>'footer'));?>
