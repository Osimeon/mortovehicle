<?php
/* @var $this DataEntryCostsController */
/* @var $model DataEntryCosts */

$this->breadcrumbs=array(
	'Data Entry Costs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Create Costs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('data-entry-costs-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Non Approved Costs</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-entry-costs-grid',
	'dataProvider'=>$unapproved,
	'columns'=>array(
		'reg_no',
		'service_date',
		array('header'=>'Record Cost (Kshs)', 'value'=>'$data->getTotal()'),
		array('header'=>'Approaved', 'value'=>'$data->getStatus()'),
		array('header'=>'Created By', 'value'=>'$data->getUser()'),
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<h2>Approved Costs</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-entry-costs-grid',
	'dataProvider'=>$approved,
	'columns'=>array(
		'reg_no',
		'service_date',
		array('header'=>'Record Cost (Kshs)', 'value'=>'$data->getTotal()'),
		array('header'=>'Approaved', 'value'=>'$data->getStatus()'),
		array('header'=>'Created By', 'value'=>'$data->getUser()'),
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<h2>All Costs</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-entry-costs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'reg_no',
		'service_date',
		array('header'=>'Record Cost (Kshs)', 'value'=>'$data->getTotal()'),
		array('header'=>'Approaved', 'value'=>'$data->getStatus()'),
		array('header'=>'Created By', 'value'=>'$data->getUser()'),
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
