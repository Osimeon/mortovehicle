<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filter-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">All Fields Are Required</p>
	<div class="row">
		<?php echo $form->labelEx($model,'morto_reg_no'); ?>
		<?php echo $form->dropDownList($model,'morto_reg_no', CHtml::listData(Details::model()->findAll(), 'reg_no', 'reg_no'),array(
    'prompt'=>'Select Reg Number',)); ?>
		<?php echo $form->error($model,'morto_reg_no'); ?>
	</div>	
    
    <!-- Date From-->
	<div class="row">
		<?php echo $form->labelEx($model,'date_from'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_from', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
                'language' => ''
            ));
		?>
		<?php echo $form->error($model,'date_to'); ?>
	</div>
	
    <!-- Date To-->
    <div class="row">
		<?php echo $form->labelEx($model,'date_to'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_to', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
                'language' => ''
            ));
		?>
		<?php echo $form->error($model,'date_to'); ?>
	</div>
	
    <!-- Report Type -->
    <div class="row">
		<?php echo $form->labelEx($model,'reporttype'); ?>
		<?php echo $form->dropDownList($model,'reporttype', CHtml::listData(ReportTypes::model()->findAll(), 'report_name', 'report_name'),array(
    'prompt'=>'Select A Report Type',)); ?>
		<?php echo $form->error($model,'morto_reg_no'); ?>
	</div>	
    
    <!-- Analysis Period -->
    <div class="row">
		<?php echo $form->labelEx($model,'period'); ?>
		<?php echo $form->dropDownList($model,'period', CHtml::listData(AnalysisPeriods::model()->findAll(), 'analysisperiod', 'analysisperiod'),array(
    'prompt'=>'Select Analysis Period',)); ?>
		<?php echo $form->error($model,'period'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Go' : 'Cancel'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->