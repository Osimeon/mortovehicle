<?php
/* @var $this VehicleLogDataEntryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Log Records',
);

$this->menu=array(
	array('label'=>'Create Log Records', 'url'=>array('create')),
	#array('label'=>'Manage Log Entries', 'url'=>array('admin')),
);
?>

<h1>Vehicle Log Data Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
