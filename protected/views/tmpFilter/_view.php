<?php
/* @var $this TmpFilterController */
/* @var $data TmpFilter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('morto_reg_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->morto_reg_no), array('view', 'id'=>$data->morto_reg_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_from')); ?>:</b>
	<?php echo CHtml::encode($data->date_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_to')); ?>:</b>
	<?php echo CHtml::encode($data->date_to); ?>
	<br />


</div>