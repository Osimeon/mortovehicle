<?php
/* @var $this DetailsController */
/* @var $model Details */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_no'); ?>
		<?php echo $form->textField($model,'reg_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reg_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dept'); ?>
		<?php echo $form->textField($model,'dept',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dept'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officebase_location'); ?>
		<?php echo $form->textField($model,'officebase_location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'officebase_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morto_desc_type'); ?>
		<?php echo $form->textField($model,'morto_desc_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'morto_desc_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purch_date'); ?>
		<?php echo $form->textField($model,'purch_date'); ?>
		<?php echo $form->error($model,'purch_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purch_cost'); ?>
		<?php echo $form->textField($model,'purch_cost'); ?>
		<?php echo $form->error($model,'purch_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fuel_card_no'); ?>
		<?php echo $form->textField($model,'fuel_card_no'); ?>
		<?php echo $form->error($model,'fuel_card_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_incharge'); ?>
		<?php echo $form->textField($model,'staff_incharge'); ?>
		<?php echo $form->error($model,'staff_incharge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'engine_number'); ?>
		<?php echo $form->textArea($model,'engine_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'engine_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frame_number'); ?>
		<?php echo $form->textArea($model,'frame_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'frame_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'log_book_number'); ?>
		<?php echo $form->textArea($model,'log_book_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'log_book_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_provider'); ?>
		<?php echo $form->textArea($model,'insurance_provider',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'insurance_provider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insurance_expiry_date'); ?>
		<?php echo $form->textField($model,'insurance_expiry_date'); ?>
		<?php echo $form->error($model,'insurance_expiry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location'); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->