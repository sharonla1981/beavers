<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	$model->offer_id=>array('view','id'=>$model->offer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Create Offer', 'url'=>array('create')),
	array('label'=>'View Offer', 'url'=>array('view', 'id'=>$model->offer_id)),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>

<h1>Update Offer <?php echo $model->offer_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>