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

<h3>Office Mantainance Cost (Kshs)</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$omaint,
	'columns'=>array(
		'office_name',
		array('header'=>'Maintenance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->maint, 0);},),
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