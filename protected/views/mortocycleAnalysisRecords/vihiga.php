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

<h3>Vihiga Aggregate Report</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$aggregate,
	'columns'=>array(
		'reg_no',		
		array('header'=>'Maintenance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->maint, 2);},),
		array('header'=>'Fuel Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->fcost, 2);},),
		array('header'=>'Total Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->tcost, 2);},),
		array('header'=>'Distance Covered (Kms)','value'=>function($dataProvider){return number_format($dataProvider->kmcovered, 2);},),
		array('header'=>'Fuel Usage (Lts)','value'=>function($dataProvider){return number_format($dataProvider->fconsumed, 2);},),
		array('header'=>'Distance Covered Per Litre (Kms)','value'=>function($dataProvider){return number_format($dataProvider->kmperlitre, 2);},),
		array('header'=>'Cost Per Kilometer (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->shsperlitre, 2);},),
	),
)); 
?>

<h3>Vihiga Office Cumilative Expenditure Summary</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$cumilative,
	'columns'=>array(
		'office_name',
		array('header'=>'Fuel Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->fcost, 0);},),
		array('header'=>'Maintenance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->maint, 0);},),
		array('header'=>'Total Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->tcost, 0);},),
	),
)); 
?>

<h3>Vihiga Office Fuel Consumption</h3>
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

<h3>Vihiga Office Mantainance Cost Per Mortobike</h3>

<?php
	$this->widget('application.extensions.groupgridview.GroupGridView', array(
      	'id' => 'grid1',
      	'dataProvider' => $permorto,
      	'mergeColumns' => array('office_name'),  
      	'columns' => array(			
			'office_name',
			'analysisperiod',
        	'morto_reg_no',		
			array('header'=>'Mantainance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->total_maintenance_a, 0);},),
      	),
    ));
?>

<h3>Vihiga Office Mantainance Cost (Kshs)</h3>
<?php 
$gridWidget = $this->widget('application.extensions.groupgridview.GroupGridView', array(
	'id' => 'grid1',
	'dataProvider'=>$omaint,
	'mergeColumns' => array('office_name'), 
	'columns'=>array(
		'office_name',
		'analysisperiod',
		'startdate',
		'enddate',		
		array('header'=>'Maintenance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->total_maintenance, 0);},),
	),
)); 
?>

<h3>Vihiga Office Total Cost (Kshs)</h3>
<?php 
$gridWidget = $this->widget('application.extensions.groupgridview.GroupGridView', array(
	'id' => 'grid1',
	'dataProvider'=>$otcost,
	'mergeColumns' => array('office_name'),
	'columns'=>array(
		'office_name',
		'analysisperiod',
		'startdate',
		'enddate',		
		array('header'=>'Total Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->total_cost, 0);},),
	),
)); 
?>

<h3>Vihiga Mortocycle Summary Report</h3>

<?php
	$gridWidget = $this->widget('application.extensions.groupgridview.GroupGridView', array(
      	'id' => 'grid1',
      	'dataProvider' => $summary,
      	'mergeColumns' => array('morto_reg_no'),  
      	'columns' => array(
			'morto_reg_no',
        	'analysisperiod',		
			array('header'=>'Maintenance Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->maint, 2);},),
			array('header'=>'Fuel Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->fcost, 2);},),
			array('header'=>'Total Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->tcost, 2);},),
			array('header'=>'Distance Covered (Kms)','value'=>function($dataProvider){return number_format($dataProvider->kmcovered, 2);},),
			array('header'=>'Fuel Usage (Lts)','value'=>function($dataProvider){return number_format($dataProvider->fconsumed, 2);},),
			array('header'=>'Distance Covered Per Litre (Kms)','value'=>function($dataProvider){return number_format($dataProvider->kmperlitre, 2);},),
			array('header'=>'Cost Per Kilometer (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->shsperlitre, 2);},),
      	),
    ));
	$this->renderExportGridButton($gridWidget,'Export Grid Results',array('class'=>'btn btn-info pull-right'));
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