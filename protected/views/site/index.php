<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<br />
<ul>
    <li><?php echo CHtml::link('Manage Species',array('/species')); ?></li>
    <li><?php echo CHtml::link('Manage Diets',array('/diets')); ?></li>
    <li><?php echo CHtml::link('Manage Water types (Ecology)',array('/ecologywatertypes')); ?></li>
    <li><?php echo CHtml::link('Manage Water types (Breeding)',array('/breedingwatertypes')); ?></li>
    
</ul>