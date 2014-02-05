<?php
/* @var $this VehicleCostsDataEntryController */
/* @var $model VehicleCostsDataEntry */

$this->breadcrumbs=array(
	'Vehicle Maintenance'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	#array('label'=>'Manage Maintenance Records', 'url'=>array('admin')),
);
?>

<h1>Create Maintenance Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>