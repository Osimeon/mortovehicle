<?php
/* @var $this DataEntryLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mortocycle Reports',
);
?>
<?php include 'menuall.php'; ?>
<h3>Mortocycle Details</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$details,
	'columns'=>array(
		'reg_no',
		'dept',
		'officebase_location',
		'fuel_card_no',
		'staff_incharge',
		'log_book_number',
	),
)); 