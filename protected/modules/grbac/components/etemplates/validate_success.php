<? $this->widget('application.modules.grbac.components.Email_template', 
   array('state'=>'good'
        ,'view'=>'header'
		,'title'=>'Account Vaalidated'
		,'result'=>'Account Vaalidated'
		,'short_msg'=>'Account Vaalidated, change your temporary username and password.'
		));?><br />

<p>Hello <?php echo $model->email?>,</p><br />

<p>Welcome to <?php echo Yii::app()->name?>!</p><br />
<p>Your temporary
    UserID   is <?php echo $model->uid?> ,
    username is <?php echo $model->username?> and
    password is <?php echo $password?> 
</p>

<p>Change your Usename and password. You can login using, email, username, or UID</p>

<? $this->widget('application.modules.grbac.components.Email_template', array('state'=>'good','view'=>'footer'));?>
