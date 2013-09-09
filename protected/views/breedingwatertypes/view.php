<?php
/* @var $this BreedingwatertypesController */
/* @var $model Breedingwatertypes */

$this->breadcrumbs=array(
	'Breedingwatertypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Breedingwatertypes', 'url'=>array('index')),
	array('label'=>'Create Breedingwatertypes', 'url'=>array('create')),
	array('label'=>'Update Breedingwatertypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Breedingwatertypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Breedingwatertypes', 'url'=>array('admin')),
);
?>

<h1>View Breedingwatertypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'icon',
	),
)); ?>
