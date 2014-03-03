<?php
/* @var $this TmpFilterController */
/* @var $model TmpFilter */

$this->breadcrumbs=array(
	'Tmp Filters'=>array('index'),
	$model->morto_reg_no,
);

$this->menu=array(
	array('label'=>'List TmpFilter', 'url'=>array('index')),
	array('label'=>'Create TmpFilter', 'url'=>array('create')),
	array('label'=>'Update TmpFilter', 'url'=>array('update', 'id'=>$model->morto_reg_no)),
	array('label'=>'Delete TmpFilter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->morto_reg_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TmpFilter', 'url'=>array('admin')),
);
?>

<h1>View TmpFilter #<?php echo $model->morto_reg_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'morto_reg_no',
		'date_from',
		'date_to',
	),
)); ?>
