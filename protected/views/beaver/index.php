<?php
/* @var $this BeaverController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Beavers',
);

$this->menu=array(
	array('label'=>'Create Beaver', 'url'=>array('create')),
	array('label'=>'Manage Beaver', 'url'=>array('admin')),
);
?>

<h1>Beavers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
