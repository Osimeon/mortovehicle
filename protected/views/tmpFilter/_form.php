<?php
/* @var $this TmpFilterController */
/* @var $model TmpFilter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tmp-filter-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'morto_reg_no'); ?>
		<?php echo $form->textField($model,'morto_reg_no'); ?>
		<?php echo $form->error($model,'morto_reg_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_from'); ?>
		<?php echo $form->textField($model,'date_from'); ?>
		<?php echo $form->error($model,'date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_to'); ?>
		<?php echo $form->textField($model,'date_to'); ?>
		<?php echo $form->error($model,'date_to'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->