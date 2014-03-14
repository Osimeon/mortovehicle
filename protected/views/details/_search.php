<?php
/* @var $this DetailsController */
/* @var $model Details */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'reg_no'); ?>
		<?php echo $form->textField($model,'reg_no',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dept'); ?>
		<?php echo $form->textField($model,'dept',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officebase_location'); ?>
		<?php echo $form->textField($model,'officebase_location',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morto_desc_type'); ?>
		<?php echo $form->textField($model,'morto_desc_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purch_date'); ?>
		<?php echo $form->textField($model,'purch_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purch_cost'); ?>
		<?php echo $form->textField($model,'purch_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuel_card_no'); ?>
		<?php echo $form->textField($model,'fuel_card_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_incharge'); ?>
		<?php echo $form->textField($model,'staff_incharge'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'engine_number'); ?>
		<?php echo $form->textArea($model,'engine_number',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frame_number'); ?>
		<?php echo $form->textArea($model,'frame_number',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'log_book_number'); ?>
		<?php echo $form->textArea($model,'log_book_number',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_provider'); ?>
		<?php echo $form->textArea($model,'insurance_provider',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insurance_expiry_date'); ?>
		<?php echo $form->textField($model,'insurance_expiry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->