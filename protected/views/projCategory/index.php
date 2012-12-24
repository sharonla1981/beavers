<?php
/* @var $this ProjCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proj Categories',
);

$this->menu=array(
	array('label'=>'Create ProjCategory', 'url'=>array('create')),
	array('label'=>'Manage ProjCategory', 'url'=>array('admin')),
);
?>

<h1>Proj Categories</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            'category.descr',
            'project.descr',
            'planned'
        )
	//'itemView'=>'_view',
)); ?>
