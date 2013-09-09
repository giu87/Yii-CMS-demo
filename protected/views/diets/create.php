<?php
/* @var $this DietsController */
/* @var $model Diets */

$this->breadcrumbs=array(
	'Diets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diets', 'url'=>array('index')),
	array('label'=>'Manage Diets', 'url'=>array('admin')),
);
?>

<h1>Create Diets</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>