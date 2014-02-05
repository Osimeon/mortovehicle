<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_name'); ?>
		<?php echo $form->textField($model,'staff_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_location'); ?>
		<?php echo $form->textArea($model,'staff_location',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->