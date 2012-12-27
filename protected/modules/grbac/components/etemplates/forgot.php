<? $this->widget('application.components.email_template.Email_template', 
   array('state'=>'warn'
        ,'view'=>'header'
		,'title'=>'Forgotten Password'
		,'result'=>'Forgot Password?'
		,'short_msg'=>'Follow the instruction.'
		));?><br />
		
<? $link = Yii::app()->request->getHostInfo().CHtml::normalizeUrl(array('validate', 
    'valid_code'=>$form->valid_code, 'username'=>$form->username));
?>

<p>Dear <?php echo $form->username?>,</p><br /><br />

<p>We have received your 'Password Forgotten' request!</p><br />

<p>Click here to <a href="<?=$link?>">change your password</a></p><br />

<p>If you cannot access the link above, you can paste the URL address into your browser:</p>
<? $this->widget('application.components.email_template.Email_template', array('view'=>'footer'));?>
