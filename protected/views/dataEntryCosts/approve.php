<?php
/* @var $this DataEntryCostsController */
/* @var $model DataEntryCosts */

$this->breadcrumbs=array(
	'Data Entry Costs'=>array('index'),
	$model->cost_rec_id,
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	array('label'=>'Create Maintenance Record', 'url'=>array('create')),
	array('label'=>'Update Maintenance Record', 'url'=>array('update', 'id'=>$model->cost_rec_id)),
	#array('label'=>'Delete Costs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cost_rec_id),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>View Maintenance Reocrd #<?php echo $model->cost_rec_id; ?></h1>

<?php echo $this->renderPartial('_approve', array('model'=>$model)); ?>