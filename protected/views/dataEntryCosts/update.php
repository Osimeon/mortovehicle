<?php
/* @var $this DataEntryCostsController */
/* @var $model DataEntryCosts */

$this->breadcrumbs=array(
	'Data Entry Costs'=>array('index'),
	$model->cost_rec_id=>array('view','id'=>$model->cost_rec_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	array('label'=>'Create Maintenance Record', 'url'=>array('create')),
	array('label'=>'View Maintenance Record', 'url'=>array('view', 'id'=>$model->cost_rec_id)),
	#array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Update Maintenance Record <?php echo $model->cost_rec_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>