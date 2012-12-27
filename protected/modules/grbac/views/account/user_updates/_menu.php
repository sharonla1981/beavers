<p> <?php echo CHtml::link('<b class="grbac_s_pw_chg">&nbsp;</b>Change Password',array('password_change')); ?> </p>
<p> <?php echo CHtml::link('<b class="grbac_s_pi_upd">&nbsp;</b>Update Information',array('update_information')); ?> </p>

<h3>Your roles is/are:</h3>(
<? if (isset(Yii::app()->user->Admin)) echo 'Admin '; ?> 
<? if (isset(Yii::app()->user->Administrator)) echo 'Administrator '; ?> 
<? if (isset(Yii::app()->user->User)) echo 'User '; ?>
<? if (isset(Yii::app()->user->Authority)) echo 'Authority '; ?>)
