<?php
/* @var $this AreaTypeController */
/* @var $data AreaType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->area_type_id), array('view', 'id'=>$data->area_type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />


</div>