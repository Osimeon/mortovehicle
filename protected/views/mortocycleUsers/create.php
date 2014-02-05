<?php
/* @var $this MortocycleUsersController */
/* @var $model MortocycleUsers */

$this->breadcrumbs=array(
	'Mortocycle Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MortocycleUsers', 'url'=>array('index')),
	array('label'=>'Manage MortocycleUsers', 'url'=>array('admin')),
);
?>

<h1>Create MortocycleUsers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>