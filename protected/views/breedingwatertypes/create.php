<?php
/* @var $this BreedingwatertypesController */
/* @var $model Breedingwatertypes */

$this->breadcrumbs=array(
	'Breedingwatertypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Breedingwatertypes', 'url'=>array('index')),
	array('label'=>'Manage Breedingwatertypes', 'url'=>array('admin')),
);
?>

<h1>Create Breedingwatertypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>