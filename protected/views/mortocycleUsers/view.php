<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */

$this->breadcrumbs=array(
	'Mortocycle Users'=>array('index'),
	$model->staff_id,
);

$this->menu=array(
	array('label'=>'List MortocycleUsers', 'url'=>array('index')),
	array('label'=>'Create MortocycleUsers', 'url'=>array('create')),
	array('label'=>'Update MortocycleUsers', 'url'=>array('update', 'id'=>$model->staff_id)),
	array('label'=>'Delete MortocycleUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staff_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MortocycleUsers', 'url'=>array('admin')),
);
?>

<h1>View MortocycleUsers #<?php echo $model->staff_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'staff_id',
		'staff_name',
		'staff_location',
	),
)); ?>
