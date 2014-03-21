<?php
/* @var $this DataEntryLogController */
/* @var $model DataEntryLog */

$this->breadcrumbs=array(
	'Data Entry Logs'=>array('index'),
	$model->log_rec_id=>array('approave','id'=>$model->log_rec_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Log Records', 'url'=>array('index')),
	array('label'=>'Create Log Record', 'url'=>array('create')),
	array('label'=>'View Log Record', 'url'=>array('view', 'id'=>$model->log_rec_id)),
	#array('label'=>'Manage Logging', 'url'=>array('admin')),
);
?>

<h1>Approave Record #<?php echo $model->log_rec_id; ?></h1>

<?php echo $this->renderPartial('_approve', array('model'=>$model)); ?>