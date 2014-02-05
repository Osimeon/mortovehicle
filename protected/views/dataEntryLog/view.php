<?php
/* @var $this DataEntryLogController */
/* @var $model DataEntryLog */

$this->breadcrumbs=array(
	'Data Entry Logs'=>array('index'),
	$model->log_rec_id,
);

$this->menu=array(
	array('label'=>'List Log Records', 'url'=>array('index')),
	array('label'=>'Create Log Record', 'url'=>array('create')),
	array('label'=>'Update Log Record', 'url'=>array('update', 'id'=>$model->log_rec_id)),
	#array('label'=>'Delete Logging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->log_rec_id),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Logging', 'url'=>array('admin')),
);
?>

<h1>View Logging Record#<?php echo $model->log_rec_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'morto_reg_no',
		'date_refilled_to_full_tank',
		'fuel_quantity',
		'odometer_current_reading',
		'odometer_previous_reading',
		'kilometers_covered',
		'kilometers_covered_per_litre',
		'fuel_cost_in_kshs',
		'duration_start',
		'duration_end',
	),
)); ?>
