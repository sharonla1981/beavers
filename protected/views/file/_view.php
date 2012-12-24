<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('object_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->object_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('object_id')); ?>:</b>
	<?php echo CHtml::encode($data->object_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->file_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descr')); ?>:</b>
	<?php echo CHtml::encode($data->descr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extention_id')); ?>:</b>
	<?php echo CHtml::encode($data->extention_id); ?>
	<br />


</div>