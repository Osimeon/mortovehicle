<?php
/* @var $this DataEntryLogController */
/* @var $model DataEntryLog */

$this->breadcrumbs=array(
	'Data Entry Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Logging', 'url'=>array('index')),
	array('label'=>'Create Logging', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('data-entry-log-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-entry-log-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'morto_reg_no',
		'date_refilled_to_full_tank',
		array('header'=>'Fuel Cost','value'=>function($dataProvider){return 'Kes '.number_format($dataProvider->fuel_cost_in_kshs, 0);},),
		array('header'=>'Approaved', 'value'=>'$data->getStatus()'),
		array('header'=>'Created By', 'value'=>'$data->getUser()'),
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
