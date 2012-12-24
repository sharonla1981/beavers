<?php
/* @var $this ProjCategoryController */
/* @var $model ProjCategory */

$this->breadcrumbs=array(
	'Proj Categories'=>array('index'),
	$model->proj_category_id=>array('view','id'=>$model->proj_category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjCategory', 'url'=>array('index')),
	array('label'=>'Create ProjCategory', 'url'=>array('create')),
	array('label'=>'View ProjCategory', 'url'=>array('view', 'id'=>$model->proj_category_id)),
	array('label'=>'Manage ProjCategory', 'url'=>array('admin')),
);
?>

<h1>Update ProjCategory <?php echo $model->proj_category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>