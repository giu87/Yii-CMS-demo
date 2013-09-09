<?php
/* @var $this EcologywatertypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ecologywatertypes',
);

$this->menu=array(
	array('label'=>'Create Ecologywatertypes', 'url'=>array('create')),
	array('label'=>'Manage Ecologywatertypes', 'url'=>array('admin')),
);
?>

<h1>Ecologywatertypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
