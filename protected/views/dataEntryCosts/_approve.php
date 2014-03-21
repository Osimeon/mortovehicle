<div class="form">

    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reg_no',
		'service_date',
		'oil_lubricant_type',
		'oil_lubricant_quantity',
		'oil_lubricant_total_cost',
		'outsource_material',
		'outsource_material_cost',
		'outsource_labour_total_cost',
		'description_of_ourtsource_work_performed',
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