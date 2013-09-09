<?php
/* @var $this EcologywatertypesController */
/* @var $model Ecologywatertypes */

$this->breadcrumbs=array(
	'Ecologywatertypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ecologywatertypes', 'url'=>array('index')),
	array('label'=>'Manage Ecologywatertypes', 'url'=>array('admin')),
);
?>

<h1>Create Ecologywatertypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>