<?php
/* @var $this DataEntryLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Reports',
);
?>
<?php include 'menuall.php'; ?>
<h3>Vehicle Details</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$details,
	'columns'=>array(
		'reg_no',
		'dept',
		'officebase_location',
		'vehicle_desc',
		'fuel_card_no',
	),
)); 