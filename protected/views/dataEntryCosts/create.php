<?php
/* @var $this DataEntryCostsController */
/* @var $model DataEntryCosts */

$this->breadcrumbs=array(
	'Data Entry Costs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maintenance Records', 'url'=>array('index')),
	#array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Create Maintenance Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>