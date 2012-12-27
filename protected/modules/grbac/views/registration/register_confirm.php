<? $this->pageTitle = 'Registeration awaiting confirmation'; ?>

<h2>Waiting for email confirmation</h2><hr />
<p>Thank you for registering at <?php echo Yii::app()->name;?>!</p><br /><br />

<p>In order to activate your account you need to follow the instructions listed in email sent to at: <?php echo $model->email?>.</p>

<p>&nbsp;</p>
<p>Have a good day,</p>
<p>The <?php echo Yii::app()->name; ?> Team</p>
