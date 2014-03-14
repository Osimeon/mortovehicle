<?php
/* @var $this DetailsController */
/* @var $model Details */

$this->breadcrumbs=array(
	'Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Details', 'url'=>array('index')),
	array('label'=>'Create Details', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('details-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Details</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'details-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'reg_no',
		'dept',
		'officebase_location',
		'morto_desc_type',
		'purch_date',
		array('header'=>'Purchase Cost (Kshs)','value'=>function($dataProvider){return number_format($dataProvider->purch_cost, 2);},),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
