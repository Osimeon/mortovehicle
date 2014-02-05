<?php
/* @var $this MortocycleUsersController */
/* @var $data MortocycleUsers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->staff_id), array('view', 'id'=>$data->staff_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_name')); ?>:</b>
	<?php echo CHtml::encode($data->staff_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_location')); ?>:</b>
	<?php echo CHtml::encode($data->staff_location); ?>
	<br />


</div>