<?php
/* @var $this VehicleCostsDataEntryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Maintenance',
);

$this->menu=array(
	array('label'=>'Create Maintenance Record', 'url'=>array('create')),
	array('label'=>'Manage Maintenance Records', 'url'=>array('admin')),
);
?>

<h1>Vehicle Maintenance</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
