<?php
/* @var $this AreaTypeController */
/* @var $model AreaType */

$this->breadcrumbs=array(
	'Area Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AreaType', 'url'=>array('index')),
	array('label'=>'Manage AreaType', 'url'=>array('admin')),
);
?>

<h1>Create AreaType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>