<h3>Admin Panel for gRbac</h3>
<p>Manage roles, tasks and operation from sRbac</p>
<table>
<tr><th>Users Management</th> <th>Newsletter Management</th> </tr>
<tr><td>&nbsp;</td> <td>&nbsp;</td> </tr>
	<tr>
		<td><div class="grbac" style="padding:0 50px;">
<?php echo CHtml::link('<b class="grbac_aa">&nbsp;</b>Active Users ('.$actives.')', array('manage_actives')); ?><br /><br />
<?php echo CHtml::link('<b class="grbac_ai">&nbsp;</b>Inactive Users ('.$inactives.')', array('manage_inactives')); ?><br /><br />
<?php echo CHtml::link('<b class="grbac_au">&nbsp;</b>Add User', array('admin_create_user')); ?><br /><br />
</div>
</td>
		<td><div class="grbac" style="padding:0 50px;">
<?php echo CHtml::link('<b class="grbac_an">&nbsp;</b>Send Newletters', array('manage_inactives')); ?><br /><br />
</div>
</td>
	</tr>
</table>

<p>Followings are the add-on varibles in UserIdentity, to use check with isset first</p>
<div class="grbac" style="padding:0 50px;">
	<code>
	Yii::app()->user->id<br />
	Yii::app()->user->email<br />
	Yii::app()->user->lastlogin<br />
	Yii::app()->user->active<br />
	Yii::app()->user->Admin<br />
	Yii::app()->user->Administrator<br />
	Yii::app()->user->User<br />
	</code>
</div>