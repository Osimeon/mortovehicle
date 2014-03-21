<div class="form">

    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'morto_reg_no',
		'date_refilled_to_full_tank',
		'fuel_quantity',
		'date_created',
		'odometer_current_reading',
		'odometer_previous_reading',
		'fuel_cost_in_kshs',
		'duration_start',
		'duration_end',
		array('label'=>'Created By', 'value'=>$model->getUser()),
		'date_created',
		array('label' => 'Approaved?', 'type' => 'raw', 'value' => CHtml::checkbox( $model->approaved, $model->approaved , array("disabled" =>"true"))),
	),
)); ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'issue-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


        
	<div class="row">
		<?php echo $form->labelEx($model,'approaved'); ?>
		<?php echo $form->checkBox($model,'approaved'); ?>
		<?php echo $form->error($model,'approaved'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->