<?php
/* @var $this DietsController */
/* @var $model Diets */

$this->breadcrumbs=array(
	'Diets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diets', 'url'=>array('index')),
	array('label'=>'Create Diets', 'url'=>array('create')),
	array('label'=>'View Diets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Diets', 'url'=>array('admin')),
);
?>

<h1>Update Diets <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>