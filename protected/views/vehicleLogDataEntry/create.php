<?php
/* @var $this VehicleLogDataEntryController */
/* @var $model VehicleLogDataEntry */

$this->breadcrumbs=array(
	'Vehicle Log Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Log Records', 'url'=>array('index')),
	#array('label'=>'Manage Log Entries', 'url'=>array('admin')),
);
?>

<h1>Create Log Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>