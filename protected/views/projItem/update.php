<?php
/* @var $this ProjItemController */
/* @var $model ProjItem */

$this->breadcrumbs=array(
	'Proj Items'=>array('index'),
	$model->proj_item_id=>array('view','id'=>$model->proj_item_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjItem', 'url'=>array('index')),
	array('label'=>'Create ProjItem', 'url'=>array('create')),
	array('label'=>'View ProjItem', 'url'=>array('view', 'id'=>$model->proj_item_id)),
	array('label'=>'Manage ProjItem', 'url'=>array('admin')),
);
?>

<h1>Update ProjItem <?php echo $model->proj_item_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>