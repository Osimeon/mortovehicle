<?php
/* @var $this VehicleLogDataEntryController */
/* @var $model VehicleLogDataEntry */

$this->breadcrumbs=array(
	'Vehicle Log Records'=>array('index'),
	$model->log_rec_id=>array('view','id'=>$model->log_rec_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Log Records', 'url'=>array('index')),
	array('label'=>'Create Log Record', 'url'=>array('create')),
	array('label'=>'View Log Records', 'url'=>array('view', 'id'=>$model->log_rec_id)),
	#array('label'=>'Manage Log Entries', 'url'=>array('admin')),
);
?>

<h1>Vehicle Log Records <?php echo $model->log_rec_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>