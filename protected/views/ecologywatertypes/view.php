<?php
/* @var $this EcologywatertypesController */
/* @var $model Ecologywatertypes */

$this->breadcrumbs=array(
	'Ecologywatertypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Ecologywatertypes', 'url'=>array('index')),
	array('label'=>'Create Ecologywatertypes', 'url'=>array('create')),
	array('label'=>'Update Ecologywatertypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ecologywatertypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ecologywatertypes', 'url'=>array('admin')),
);
?>

<h1>View Ecologywatertypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'icon',
	),
)); ?>
