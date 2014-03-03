<?php
/* @var $this TmpFilterController */
/* @var $model TmpFilter */

$this->breadcrumbs=array(
	'Tmp Filters'=>array('index'),
	$model->morto_reg_no=>array('view','id'=>$model->morto_reg_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List TmpFilter', 'url'=>array('index')),
	array('label'=>'Create TmpFilter', 'url'=>array('create')),
	array('label'=>'View TmpFilter', 'url'=>array('view', 'id'=>$model->morto_reg_no)),
	array('label'=>'Manage TmpFilter', 'url'=>array('admin')),
);
?>

<h1>Update TmpFilter <?php echo $model->morto_reg_no; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>