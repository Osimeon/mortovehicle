<?php
/* @var $this DetailsController */
/* @var $data Details */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reg_no), array('view', 'id'=>$data->reg_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept')); ?>:</b>
	<?php echo CHtml::encode($data->dept); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officebase_location')); ?>:</b>
	<?php echo CHtml::encode($data->officebase_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morto_desc_type')); ?>:</b>
	<?php echo CHtml::encode($data->morto_desc_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purch_date')); ?>:</b>
	<?php echo CHtml::encode($data->purch_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purch_cost')); ?>:</b>
	<?php echo CHtml::encode($data->purch_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_card_no')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_card_no); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_incharge')); ?>:</b>
	<?php echo CHtml::encode($data->staff_incharge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('engine_number')); ?>:</b>
	<?php echo CHtml::encode($data->engine_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frame_number')); ?>:</b>
	<?php echo CHtml::encode($data->frame_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_number')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_provider')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_expiry_date')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_expiry_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	*/ ?>

</div>