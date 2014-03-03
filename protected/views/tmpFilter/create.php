<?php
/* @var $this TmpFilterController */
/* @var $model TmpFilter */

$this->breadcrumbs=array(
	'Tmp Filters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TmpFilter', 'url'=>array('index')),
	array('label'=>'Manage TmpFilter', 'url'=>array('admin')),
);
?>

<h1>Create TmpFilter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>