<?php
/* @var $this DetailsController */
/* @var $model Details */

$this->breadcrumbs=array(
	'Details'=>array('index'),
	$model->reg_no,
);

$this->menu=array(
	array('label'=>'List Details', 'url'=>array('index')),
	array('label'=>'Create Details', 'url'=>array('create')),
	array('label'=>'Update Details', 'url'=>array('update', 'id'=>$model->reg_no)),
	array('label'=>'Delete Details', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reg_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Details', 'url'=>array('admin')),
);
?>

<h1>View Details #<?php echo $model->reg_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reg_no',
		'dept',
		'officebase_location',
		'morto_desc_type',
		'purch_date',
		'purch_cost',
		'fuel_card_no',
		'staff_incharge',
		'engine_number',
		'frame_number',
		'log_book_number',
		'insurance_provider',
		'insurance_expiry_date',
		'status',
		'location',
	),
)); ?>
