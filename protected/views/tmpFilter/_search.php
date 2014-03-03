<?php
/* @var $this TmpFilterController */
/* @var $model TmpFilter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'morto_reg_no'); ?>
		<?php echo $form->textField($model,'morto_reg_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_from'); ?>
		<?php echo $form->textField($model,'date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_to'); ?>
		<?php echo $form->textField($model,'date_to'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->