<?php
/* @var $this VehicleCostsDataEntryController */
/* @var $model VehicleCostsDataEntry */

$this->breadcrumbs=array(
	'Vehicle Maintainance Data Entry'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Mantainance Records', 'url'=>array('index')),
	array('label'=>'Create Mantainance Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vehicle-costs-data-entry-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Vehicle Maintainance Data Entry</h1>

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
	'id'=>'vehicle-costs-data-entry-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'reg_no',
		'service_date',
		'oil_lubricant_type',
		'oil_lubricant_quantity',
		'oil_lubricant_total_cost',
		'outsource_material',
		/*
		'outsource_material_cost',
		'outsource_labour_total_cost',
		'description_of_ourtsource_work_performed',
		'odometer_reading',
		'duration_week',
		'analysis_period',
		'cost_rec_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
