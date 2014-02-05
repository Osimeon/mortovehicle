<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>

<h2>Mortocycle &amp; Vehicle Management System</h2>

<h3>Mortocycle Aggregate Report</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$morotdetails,
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

<h3>Vehicle Analysis Report</h3>

<?php
	$this->widget('application.extensions.groupgridview.GroupGridView', array(
      	'id' => 'grid1',
      	'dataProvider' => $vehicledetails,
      	'mergeColumns' => array('morto_reg_no'),  
      	'columns' => array(
			'morto_reg_no',		
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

<script>
// document ready function
$(document).ready(function() {

	var divElement = $('div'); //log all div elements

	//circular progrress bar
	$(function () {

		$(".greenCircle").knob({
            'min':0,
            'max':100,
            'readOnly': true,
            'width': 80,
            'height': 80,
            'fgColor': '#9FC569',
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true
        })
        $(".redCircle").knob({
            'min':0,
            'max':100,
            'readOnly': true,
            'width': 80,
            'height': 80,
            'fgColor': '#ED7A53',
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true
        })
        $(".blueCircle").knob({
            'min':0,
            'max':100,
            'readOnly': true,
            'width': 80,
            'height': 80,
            'fgColor': '#88BBC8',
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true
        })

	});
</script>

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