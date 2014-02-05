<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */

$this->breadcrumbs=array(
	'Mortocycle Users'=>array('index'),
	$model->staff_id=>array('view','id'=>$model->staff_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MortocycleUsers', 'url'=>array('index')),
	array('label'=>'Create MortocycleUsers', 'url'=>array('create')),
	array('label'=>'View MortocycleUsers', 'url'=>array('view', 'id'=>$model->staff_id)),
	array('label'=>'Manage MortocycleUsers', 'url'=>array('admin')),
);
?>

<h1>Update MortocycleUsers <?php echo $model->staff_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>