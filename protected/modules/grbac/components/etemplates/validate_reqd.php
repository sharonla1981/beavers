<? $this->widget('application.modules.grbac.components.Email_template', 
   array('state'=>'good'
        ,'view'=>'header'
		,'title'=>'Account created'
		,'result'=>'Account Created'
		,'short_msg'=>'You must verify your email.'
		));?><br />

<? $link = Yii::app()->request->getHostInfo().CHtml::normalizeUrl(array('validate', 
    'valid_code'=>$model->valid_code));
?>

<p>Hello <?php echo $model->email?>,</p><br />

<p>Welcome to <?php echo Yii::app()->name?>!</p><br />

<p>Thank you for creating an account with us. 
   If this is a valid request, you must <a href="<?=$link?>" rel='follow'>verify by clicking here.</a> </p><br /> 

<p>If you cannot access the link above, you can right click, copy the link location then paste the address into your browser:</p>

<? $this->widget('application.modules.grbac.components.Email_template', array('state'=>'good','view'=>'footer'));?>
