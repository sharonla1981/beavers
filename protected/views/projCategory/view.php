<?php
/* @var $this ProjCategoryController */
/* @var $model ProjCategory */

$this->breadcrumbs=array(
	'Proj Categories'=>array('index'),
	$model->proj_category_id,
);

$this->menu=array(
	array('label'=>'List ProjCategory', 'url'=>array('index')),
	array('label'=>'Create ProjCategory', 'url'=>array('create')),
	array('label'=>'Update ProjCategory', 'url'=>array('update', 'id'=>$model->proj_category_id)),
	array('label'=>'Delete ProjCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->proj_category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjCategory', 'url'=>array('admin')),
);
?>

<h1>View ProjCategory #<?php echo $model->proj_category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'proj_category_id',
		'category_id',
		'project_id',
		'planned',
		'create_time',
		'create_user_id',
		'update_user_id',
		'update_time',
	),
)); ?>
