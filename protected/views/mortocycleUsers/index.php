<?php
/* @var $this MortocycleUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mortocycle Users',
);

$this->menu=array(
	array('label'=>'Create MortocycleUsers', 'url'=>array('create')),
	array('label'=>'Manage MortocycleUsers', 'url'=>array('admin')),
);
?>

<h1>Mortocycle Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
