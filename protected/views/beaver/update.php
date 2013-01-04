<?php
/* @var $this BeaverController */
/* @var $model Beaver */

$this->breadcrumbs=array(
	'Beavers'=>array('index'),
	$model->beaver_id=>array('view','id'=>$model->beaver_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Beaver', 'url'=>array('index')),
	array('label'=>'Create Beaver', 'url'=>array('create')),
	array('label'=>'View Beaver', 'url'=>array('view', 'id'=>$model->beaver_id)),
	array('label'=>'Manage Beaver', 'url'=>array('admin')),
);
?>

<h1>Update Beaver <?php echo $model->beaver_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>