<?php
/* @var $this VehicleLogDataEntryController */
/* @var $model VehicleLogDataEntry */

$this->breadcrumbs=array(
	'Vehicle Logging Data Entry'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Log Entries', 'url'=>array('index')),
	array('label'=>'Create Log Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vehicle-log-data-entry-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vehicle Log Data Entries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehicle-log-data-entry-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'morto_reg_no',
		'date_refilled_to_full_tank',
		'fuel_quantity',
		'odometer_current_reading',
		'odometer_previous_reading',
		'kilometers_covered',
		/*
		'kilometers_covered_per_litre',
		'fuel_cost_in_kshs',
		'duration_week',
		'analysis_period',
		'log_rec_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
