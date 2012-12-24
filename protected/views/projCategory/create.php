<?php
/* @var $this ProjCategoryController */
/* @var $model ProjCategory */

$this->breadcrumbs=array(
	'Proj Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjCategory', 'url'=>array('index')),
	array('label'=>'Manage ProjCategory', 'url'=>array('admin')),
);
?>

<h1>Create ProjCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>