<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mortocycle-users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_name'); ?>
		<?php echo $form->textField($model,'staff_name'); ?>
		<?php echo $form->error($model,'staff_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_location'); ?>
		<?php echo $form->textArea($model,'staff_location',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'staff_location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->