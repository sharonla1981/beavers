<?php
/* @var $this AreaTypeController */
/* @var $model AreaType */

$this->breadcrumbs=array(
	'Area Types'=>array('index'),
	$model->area_type_id=>array('view','id'=>$model->area_type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AreaType', 'url'=>array('index')),
	array('label'=>'Create AreaType', 'url'=>array('create')),
	array('label'=>'View AreaType', 'url'=>array('view', 'id'=>$model->area_type_id)),
	array('label'=>'Manage AreaType', 'url'=>array('admin')),
);
?>

<h1>Update AreaType <?php echo $model->area_type_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>