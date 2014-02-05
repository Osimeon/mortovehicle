<?php
/* @var $this DataEntryCostsController */
/* @var $model DataEntryCosts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-entry-costs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>	
	<!-- Extended Test Row -->
	<div class="row">
		<?php echo $form->labelEx($model,'reg_no'); ?>
		<?php echo $form->dropDownList($model,'reg_no', CHtml::listData(Details::model()->findAll(), 'reg_no', 'reg_no'),array(
    'prompt'=>'Select Reg Number',)); ?>
		<?php echo $form->error($model,'reg_no'); ?>
	</div>	
	<!-- Extended Date Object -->
	<div class="row">
		<?php echo $form->labelEx($model,'service_date'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'service_date', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
                'language' => ''
            ));
		?>
		<?php echo $form->error($model,'service_date'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'oil_lubricant_type'); ?>
		<?php echo $form->textField($model,'oil_lubricant_type',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Enter Oil Type e.g 2T')); ?>
		<?php echo $form->error($model,'oil_lubricant_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oil_lubricant_quantity'); ?>
		<?php echo $form->textField($model,'oil_lubricant_quantity',array('placeholder'=>'Enter Oil Quantity In liters')); ?>
		<?php echo $form->error($model,'oil_lubricant_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oil_lubricant_total_cost'); ?>
		<?php echo $form->textField($model,'oil_lubricant_total_cost',array('placeholder'=>'Enter Oil Cost In Kshs')); ?>
		<?php echo $form->error($model,'oil_lubricant_total_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outsource_material'); ?>
		<?php echo $form->textField($model,'outsource_material',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Outsource Material Purchased')); ?>
		<?php echo $form->error($model,'outsource_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outsource_material_cost'); ?>
		<?php echo $form->textField($model,'outsource_material_cost', array('placeholder'=>'Enter Material Cost In Kshs')); ?>
		<?php echo $form->error($model,'outsource_material_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outsource_labour_total_cost'); ?>
		<?php echo $form->textField($model,'outsource_labour_total_cost', array('placeholder'=>'Enter Labour Cost In Kshs')); ?>
		<?php echo $form->error($model,'outsource_labour_total_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_of_ourtsource_work_performed'); ?>
		<?php echo $form->textArea($model,'description_of_ourtsource_work_performed',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Describe Work Performed On Motorbike, E.g Washing')); ?>
		<?php echo $form->error($model,'description_of_ourtsource_work_performed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odometer_reading'); ?>
		<?php echo $form->textField($model,'odometer_reading', array('placeholder'=>'Enter Odometer Current Reading')); ?>
		<?php echo $form->error($model,'odometer_reading'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration_start'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'duration_start', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
                'language' => ''
            ));
		?>
		<?php echo $form->error($model,'duration_start'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'duration_end'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'duration_end', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
                'language' => ''
            ));
		?>
		<?php echo $form->error($model,'duration_end'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'costyear'); ?>
		<?php //echo $form->textField($model,'costyear'); ?>
		<?php //echo $form->error($model,'costyear'); ?>
	</div>-->

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'analysisperiod'); ?>
		<?php //echo $form->textField($model,'analysisperiod'); ?>
		<?php //echo $form->error($model,'analysisperiod'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->