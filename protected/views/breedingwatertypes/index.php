<?php
/* @var $this BreedingwatertypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Breedingwatertypes',
);

$this->menu=array(
	array('label'=>'Create Breedingwatertypes', 'url'=>array('create')),
	array('label'=>'Manage Breedingwatertypes', 'url'=>array('admin')),
);
?>

<h1>Breedingwatertypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
