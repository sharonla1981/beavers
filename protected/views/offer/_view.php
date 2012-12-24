<?php
/* @var $this OfferController */
/* @var $data Offer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->offer_id), array('view', 'id'=>$data->offer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proj_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->proj_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_price')); ?>:</b>
	<?php echo CHtml::encode($data->unit_price); ?>
	<br />


</div>