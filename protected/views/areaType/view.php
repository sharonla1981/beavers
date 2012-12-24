<?php
/* @var $this AreaTypeController */
/* @var $model AreaType */

$this->breadcrumbs=array(
	'Area Types'=>array('index'),
	$model->area_type_id,
);

$this->menu=array(
	array('label'=>'List AreaType', 'url'=>array('index')),
	array('label'=>'Create AreaType', 'url'=>array('create')),
	array('label'=>'Update AreaType', 'url'=>array('update', 'id'=>$model->area_type_id)),
	array('label'=>'Delete AreaType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->area_type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AreaType', 'url'=>array('admin')),
);
?>

<h1>View AreaType #<?php echo $model->area_type_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'area_type_id',
		'desc',
	),
)); ?>
