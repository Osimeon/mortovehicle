<?php
	include 'menuall.php'; 
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reports-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'analysis_period',
		'startdate',
		'enddate',
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