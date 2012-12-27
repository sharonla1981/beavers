<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	$model->uid,
);

$this->menu=array(
	array('label'=>'List Userprofile', 'url'=>array('index')),
	array('label'=>'Create Userprofile', 'url'=>array('create')),
	array('label'=>'Update Userprofile', 'url'=>array('update', 'id'=>$model->uid)),
	array('label'=>'Delete Userprofile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure to delete this item?')),
	array('label'=>'Manage Userprofile', 'url'=>array('admin')),
);
?>

<h1>View Userprofile #<?php echo $model->uid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'uid',
		'type',
		'name_f',
		'name_m',
		'name_l',
		'avatar',
		'dob',
		'gender',
		'email_alt',
		'fax',
		'phone',
		'cell',
		'signature',
		'aim',
		'yim',
		'live',
		'website',
		'is_public_dob',
		'is_public_email',
		'is_public_phone',
		'is_public_cell',
		'active',
	),
)); ?>
