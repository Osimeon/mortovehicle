<?php
/* @var $this MortocycleUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mortocycle Users',
);
?>
<?php include 'menuall.php'; ?>

<h1>Mortocycle Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'viewusers',
)); ?>
