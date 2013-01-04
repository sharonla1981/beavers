<?php
/* @var $this BeaverController */
/* @var $model Beaver */

$this->breadcrumbs=array(
	'Beavers'=>array('index'),
	$model->beaver_id,
);

$this->menu=array(
	array('label'=>'List Beaver', 'url'=>array('index')),
	array('label'=>'Create Beaver', 'url'=>array('create')),
	array('label'=>'Update Beaver', 'url'=>array('update', 'id'=>$model->beaver_id)),
	array('label'=>'Delete Beaver', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->beaver_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beaver', 'url'=>array('admin')),
);
?>

<h1>View Beaver #<?php echo $model->beaver_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'beaver_id',
		'user_id',
		'project_id',
		'create_time',
		'create_user_id',
		'update_user_id',
		'update_time',
	),
)); ?>
