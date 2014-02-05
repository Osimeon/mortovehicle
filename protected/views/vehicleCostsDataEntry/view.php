<?php
/* @var $this VehicleCostsDataEntryController */
/* @var $model VehicleCostsDataEntry */

$this->breadcrumbs=array(
	'Vehicle Maintenance'=>array('index'),
	$model->cost_rec_id,
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	array('label'=>'Create Maintenance Record', 'url'=>array('create')),
	array('label'=>'Update Mantainance Record', 'url'=>array('update', 'id'=>$model->cost_rec_id)),
	#array('label'=>'Delete Mantainance Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cost_rec_id),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Mantainance Records', 'url'=>array('admin')),
);
?>

<h1>View Maintenance Record #<?php echo $model->cost_rec_id; ?></h1>

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
		'odometer_reading',
		'duration_week',
		'analysis_period',
		'cost_rec_id',
	),
)); ?>
