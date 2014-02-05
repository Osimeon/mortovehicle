<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */

$this->breadcrumbs=array(
	'Mortocycle Users'=>array('index'),
	$model->staff_id,
);
?>

<h1>View User #<?php echo $model->staff_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'staff_id',
		'staff_name',
		'staff_location',
	),
)); ?>

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