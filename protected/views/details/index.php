<?php
/* @var $this DetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Details',
);

$this->menu=array(
	array('label'=>'Create Details', 'url'=>array('create')),
	array('label'=>'Manage Details', 'url'=>array('admin')),
);
?>

<h1>Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
