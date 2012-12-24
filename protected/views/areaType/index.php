<?php
/* @var $this AreaTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Area Types',
);

$this->menu=array(
	array('label'=>'Create AreaType', 'url'=>array('create')),
	array('label'=>'Manage AreaType', 'url'=>array('admin')),
);
?>

<h1>Area Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
