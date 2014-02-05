<?php
/* @var $this DataEntryCostsController */
/* @var $data DataEntryCosts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_rec_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cost_rec_id), array('view', 'id'=>$data->cost_rec_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_no')); ?>:</b>
	<?php echo CHtml::encode($data->reg_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_date')); ?>:</b>
	<?php echo CHtml::encode($data->service_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oil_lubricant_type')); ?>:</b>
	<?php echo CHtml::encode($data->oil_lubricant_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oil_lubricant_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->oil_lubricant_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oil_lubricant_total_cost')); ?>:</b>
	<?php echo CHtml::encode($data->oil_lubricant_total_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outsource_material')); ?>:</b>
	<?php echo CHtml::encode($data->outsource_material); ?>
	<br />
</div>