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

<h3>Fuel Consumption Per Office</h3>
<?php 
$gridWidget = $this->widget('application.extensions.groupgridview.GroupGridView', array(
	'id' => 'grid1',
	'dataProvider'=>$fconsumed,
	'mergeColumns' => array('office_name'), 
	'columns'=>array(
		'office_name',
		'analysisperiod',
		'startdate',
		'enddate',		
		 array('header'=>'Fuel Consumption (Lts)','value'=>function($dataProvider){return number_format($dataProvider->fuel_consumed, 0). " Litres";},),
	),
)); 
?>

<style>
	 /* grid border */
    .grid-view table.items th, .grid-view table.items td {
        border: 1px solid gray !important;
    } 

    /* disable selected for merged cells */     
    .grid-view td.merge {
       background: none repeat scroll 0 0 #F8F8F8; 
    }
</style>