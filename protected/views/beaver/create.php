<?php
/* @var $this BeaverController */
/* @var $model Beaver */

$this->breadcrumbs=array(
	'Beavers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Beaver', 'url'=>array('index')),
	array('label'=>'Manage Beaver', 'url'=>array('admin')),
);
?>

<h1>Create Beaver</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'project'=>$project,'userForm'=>$userForm,'profile'=>$profile)); ?>