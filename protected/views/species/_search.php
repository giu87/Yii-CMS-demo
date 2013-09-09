<?php
/* @var $this SpeciesController */
/* @var $model Species */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scientificName'); ?>
		<?php echo $form->textField($model,'scientificName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discoveryAuthor'); ?>
		<?php echo $form->textField($model,'discoveryAuthor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discoveryYear'); ?>
		<?php echo $form->textField($model,'discoveryYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family'); ?>
		<?php echo $form->textField($model,'family',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photoAuthor'); ?>
		<?php echo $form->textField($model,'photoAuthor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breedingMale'); ?>
		<?php echo $form->textField($model,'breedingMale',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breedingFemale'); ?>
		<?php echo $form->textField($model,'breedingFemale',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breedingText'); ?>
		<?php echo $form->textArea($model,'breedingText',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breedingWaterType'); ?>
		<?php echo $form->textField($model,'breedingWaterType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosityText'); ?>
		<?php echo $form->textArea($model,'curiosityText',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosityImg1'); ?>
		<?php echo $form->textField($model,'curiosityImg1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosityImgAuthor1'); ?>
		<?php echo $form->textField($model,'curiosityImgAuthor1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosityImg2'); ?>
		<?php echo $form->textField($model,'curiosityImg2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curiosityImgAuthor2'); ?>
		<?php echo $form->textField($model,'curiosityImgAuthor2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyText'); ?>
		<?php echo $form->textArea($model,'morphologyText',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyPhoto'); ?>
		<?php echo $form->textField($model,'morphologyPhoto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyAuthor'); ?>
		<?php echo $form->textField($model,'morphologyAuthor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyReminderPhoto1'); ?>
		<?php echo $form->textField($model,'morphologyReminderPhoto1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyReminderPhoto2'); ?>
		<?php echo $form->textField($model,'morphologyReminderPhoto2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyReminderPhoto3'); ?>
		<?php echo $form->textField($model,'morphologyReminderPhoto3',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyReminderPhoto4'); ?>
		<?php echo $form->textField($model,'morphologyReminderPhoto4',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyDetailHeight'); ?>
		<?php echo $form->textField($model,'morphologyDetailHeight',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyDetailWeight'); ?>
		<?php echo $form->textField($model,'morphologyDetailWeight',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'morphologyDetailAge'); ?>
		<?php echo $form->textField($model,'morphologyDetailAge',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distributionOrigin'); ?>
		<?php echo $form->textArea($model,'distributionOrigin',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distributionIntroducted'); ?>
		<?php echo $form->textArea($model,'distributionIntroducted',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distributionPhoto'); ?>
		<?php echo $form->textField($model,'distributionPhoto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distributionPhotoAuthor'); ?>
		<?php echo $form->textField($model,'distributionPhotoAuthor',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyText'); ?>
		<?php echo $form->textArea($model,'ecologyText',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyWaterTypeIcon'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeIcon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyWaterTypeText'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeText',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyDiet1'); ?>
		<?php echo $form->textField($model,'ecologyDiet1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyDiet2'); ?>
		<?php echo $form->textField($model,'ecologyDiet2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyDiet3'); ?>
		<?php echo $form->textField($model,'ecologyDiet3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyDiet4'); ?>
		<?php echo $form->textField($model,'ecologyDiet4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyDiet5'); ?>
		<?php echo $form->textField($model,'ecologyDiet5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecologyText2'); ?>
		<?php echo $form->textArea($model,'ecologyText2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->