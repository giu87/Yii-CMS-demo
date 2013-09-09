<?php
/* @var $this DietsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diets',
);

$this->menu=array(
	array('label'=>'Create Diets', 'url'=>array('create')),
	array('label'=>'Manage Diets', 'url'=>array('admin')),
);
?>

<h1>Diets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
