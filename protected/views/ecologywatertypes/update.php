<?php
/* @var $this EcologywatertypesController */
/* @var $model Ecologywatertypes */

$this->breadcrumbs=array(
	'Ecologywatertypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ecologywatertypes', 'url'=>array('index')),
	array('label'=>'Create Ecologywatertypes', 'url'=>array('create')),
	array('label'=>'View Ecologywatertypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ecologywatertypes', 'url'=>array('admin')),
);
?>

<h1>Update Ecologywatertypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>