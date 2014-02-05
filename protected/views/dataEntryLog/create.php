<?php
/* @var $this DataEntryLogController */
/* @var $model DataEntryLog */

$this->breadcrumbs=array(
	'Logging Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Log Records', 'url'=>array('index')),
	#array('label'=>'Manage Logging', 'url'=>array('admin')),
);
?>

<h1>Create Log Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>