<?php
/* @var $this DeliveryController */
/* @var $model Delivery */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('delivery-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php include 'menuall.php'; ?>

<h3>Field Offices</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$allOffices,
	'columns'=>array(
		'office_number',
		'office_name',
	),
)); 
?>