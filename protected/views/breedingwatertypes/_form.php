<?php
/* @var $this BreedingwatertypesController */
/* @var $model Breedingwatertypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'breedingwatertypes-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'icon'); ?>
                <?php echo $form->fileField($model, 'icon'); ?>  
		<?php echo $form->error($model,'icon'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/breedingwatertypes/'.$model->icon,"icon",array("width"=>200)); ?>  
        </div>
        <?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->