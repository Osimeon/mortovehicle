<?php
/* @var $this DataEntryCostsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maintenance Records',
);

$this->menu=array(
	array('label'=>'Create Maintenance Records', 'url'=>array('create')),
	#array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>
<?php //include 'menuall.php'; ?>
<h1>Maintenance Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
