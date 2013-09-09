<?php
/* @var $this DietsController */
/* @var $model Diets */

$this->breadcrumbs=array(
	'Diets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Diets', 'url'=>array('index')),
	array('label'=>'Create Diets', 'url'=>array('create')),
	array('label'=>'Update Diets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Diets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diets', 'url'=>array('admin')),
);
?>

<h1>View Diets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'icon',
	),
)); ?>
