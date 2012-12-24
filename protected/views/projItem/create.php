<?php
/* @var $this ProjItemController */
/* @var $model ProjItem */

$this->breadcrumbs=array(
	'Proj Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjItem', 'url'=>array('index')),
	array('label'=>'Manage ProjItem', 'url'=>array('admin')),
);
?>

<h1>Create ProjItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>