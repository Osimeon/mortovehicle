<?php
/* @var $this VehicleCostsDataEntryController */
/* @var $model VehicleCostsDataEntry */

$this->breadcrumbs=array(
	'Vehicle Maintenance'=>array('index'),
	$model->cost_rec_id=>array('view','id'=>$model->cost_rec_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	array('label'=>'Create Maintenance Record', 'url'=>array('create')),
	array('label'=>'View Maintenance Records', 'url'=>array('view', 'id'=>$model->cost_rec_id)),
	#array('label'=>'Manage Maintenance Records', 'url'=>array('admin')),
);
?>

<h1>Update Maintenance Record #<?php echo $model->cost_rec_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>