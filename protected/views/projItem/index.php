<?php
/* @var $this ProjItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proj Items',
);

$this->menu=array(
	array('label'=>'Create ProjItem', 'url'=>array('create')),
	array('label'=>'Manage ProjItem', 'url'=>array('admin')),
);
?>

<h1>Proj Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
