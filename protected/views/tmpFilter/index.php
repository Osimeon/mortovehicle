<?php
/* @var $this TmpFilterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tmp Filters',
);

$this->menu=array(
	array('label'=>'Create TmpFilter', 'url'=>array('create')),
	array('label'=>'Manage TmpFilter', 'url'=>array('admin')),
);
?>

<h1>Tmp Filters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
