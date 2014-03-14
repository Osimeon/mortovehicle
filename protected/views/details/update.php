<?php
/* @var $this DetailsController */
/* @var $model Details */

$this->breadcrumbs=array(
	'Details'=>array('index'),
	$model->reg_no=>array('view','id'=>$model->reg_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Details', 'url'=>array('index')),
	array('label'=>'Create Details', 'url'=>array('create')),
	array('label'=>'View Details', 'url'=>array('view', 'id'=>$model->reg_no)),
	array('label'=>'Manage Details', 'url'=>array('admin')),
);
?>

<h1>Update Details <?php echo $model->reg_no; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>