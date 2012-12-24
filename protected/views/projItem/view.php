<?php
/* @var $this ProjItemController */
/* @var $model ProjItem */

$this->breadcrumbs=array(
	'Proj Items'=>array('index'),
	$model->proj_item_id,
);

$this->menu=array(
	array('label'=>'List ProjItem', 'url'=>array('index')),
	array('label'=>'Create ProjItem', 'url'=>array('create')),
	array('label'=>'Update ProjItem', 'url'=>array('update', 'id'=>$model->proj_item_id)),
	array('label'=>'Delete ProjItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->proj_item_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjItem', 'url'=>array('admin')),
);
?>

<h1>View ProjItem #<?php echo $model->proj_item_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'proj_item_id',
		'item_id',
		'descr',
		'supplier_id',
		'planned',
		'unit_price',
		'amount',
		'proj_category_id',
		'create_time',
		'create_user_id',
		'update_user_id',
		'update_time',
	),
)); ?>
