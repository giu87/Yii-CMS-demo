<?php
/* @var $this BreedingwatertypesController */
/* @var $model Breedingwatertypes */

$this->breadcrumbs=array(
	'Breedingwatertypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Breedingwatertypes', 'url'=>array('index')),
	array('label'=>'Create Breedingwatertypes', 'url'=>array('create')),
	array('label'=>'View Breedingwatertypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Breedingwatertypes', 'url'=>array('admin')),
);
?>

<h1>Update Breedingwatertypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>