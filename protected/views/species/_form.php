<?php
/* @var $this SpeciesController */
/* @var $model Species */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'species-form',
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

        <br />
        <hr>
        <br />
        <h2>Index</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'scientificName'); ?>
		<?php echo $form->textField($model,'scientificName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'scientificName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discoveryAuthor'); ?>
		<?php echo $form->textField($model,'discoveryAuthor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'discoveryAuthor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discoveryYear'); ?>
		<?php echo $form->textField($model,'discoveryYear'); ?>
		<?php echo $form->error($model,'discoveryYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family'); ?>
		<?php echo $form->textField($model,'family',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'family'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
                <?php echo $form->fileField($model, 'photo'); ?>  
		<?php echo $form->error($model,'photo'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/index/'.$model->photo,"image",array("width"=>200)); ?>  
        </div>
        <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'photoAuthor'); ?>
		<?php echo $form->textField($model,'photoAuthor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'photoAuthor'); ?>
	</div>

        <br />
        <hr>
        <br />
        <h2>Breeding</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'breedingMale'); ?>
		<?php echo $form->textField($model,'breedingMale',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'breedingMale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breedingFemale'); ?>
		<?php echo $form->textField($model,'breedingFemale',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'breedingFemale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breedingText'); ?>
		<?php echo $form->textArea($model,'breedingText',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'breedingText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breedingWaterType'); ?>
		<?php echo $form->dropDownList($model,'breedingWaterType', CHtml::listData(Breedingwatertypes::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Water type -- ')); ?>
		<?php echo $form->error($model,'breedingWaterType'); ?>
	</div>
        
        <br />
        <hr>
        <br />
        <h2>Curiosity</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'curiosityText'); ?>
		<?php echo $form->textArea($model,'curiosityText',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'curiosityText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curiosityImg1'); ?>
                <?php echo $form->fileField($model, 'curiosityImg1'); ?>  
		<?php echo $form->error($model,'curiosityImg1'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/curiosity/'.$model->curiosityImg1,"image",array("width"=>200)); ?> 
        </div>
        <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'curiosityImgAuthor1'); ?>
		<?php echo $form->textField($model,'curiosityImgAuthor1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'curiosityImgAuthor1'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'curiosityImg2'); ?>
                <?php echo $form->fileField($model, 'curiosityImg2'); ?>  
		<?php echo $form->error($model,'curiosityImg2'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/curiosity/'.$model->curiosityImg2,"image",array("width"=>200)); ?>  
        </div>
        <?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'curiosityImgAuthor2'); ?>
		<?php echo $form->textField($model,'curiosityImgAuthor2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'curiosityImgAuthor2'); ?>
	</div>

        <br />
        <hr>
        <br />
        <h2>Morphology</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyText'); ?>
		<?php echo $form->textArea($model,'morphologyText',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'morphologyText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyPhoto'); ?>
                <?php echo $form->fileField($model, 'morphologyPhoto'); ?>  
		<?php echo $form->error($model,'morphologyPhoto'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/morphology/'.$model->morphologyPhoto,"image",array("width"=>200)); ?>  
        </div>
        <?php } ?>

        <div class="row">
		<?php echo $form->labelEx($model,'morphologyAuthor'); ?>
		<?php echo $form->textField($model,'morphologyAuthor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'morphologyAuthor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyReminderPhoto1'); ?>
                <?php echo $form->fileField($model, 'morphologyReminderPhoto1'); ?>  
		<?php echo $form->error($model,'morphologyReminderPhoto1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyReminderPhoto2'); ?>
                <?php echo $form->fileField($model, 'morphologyReminderPhoto2'); ?>  
		<?php echo $form->error($model,'morphologyReminderPhoto2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyReminderPhoto3'); ?>
                <?php echo $form->fileField($model, 'morphologyReminderPhoto3'); ?>  
		<?php echo $form->error($model,'morphologyReminderPhoto3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyReminderPhoto4'); ?>
                <?php echo $form->fileField($model, 'morphologyReminderPhoto4'); ?>  
		<?php echo $form->error($model,'morphologyReminderPhoto4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyDetailHeight'); ?>
		<?php echo $form->textField($model,'morphologyDetailHeight',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'morphologyDetailHeight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyDetailWeight'); ?>
		<?php echo $form->textField($model,'morphologyDetailWeight',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'morphologyDetailWeight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morphologyDetailAge'); ?>
		<?php echo $form->textField($model,'morphologyDetailAge',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'morphologyDetailAge'); ?>
	</div>

        <br />
        <hr>
        <br />
        <h2>Ecology</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'distributionOrigin'); ?>
		<?php echo $form->textArea($model,'distributionOrigin',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'distributionOrigin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distributionIntroducted'); ?>
		<?php echo $form->textArea($model,'distributionIntroducted',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'distributionIntroducted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distributionPhoto'); ?>
                <?php echo $form->fileField($model, 'distributionPhoto'); ?>  
		<?php echo $form->error($model,'distributionPhoto'); ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
        <div class="row">
             <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/distribution/'.$model->distributionPhoto,"image",array("width"=>200)); ?>  
        </div>
        <?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'distributionPhotoAuthor'); ?>
		<?php echo $form->textField($model,'distributionPhotoAuthor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'distributionPhotoAuthor'); ?>
	</div>

        <br />
        <hr>
        <br />
        <h2>Ecology</h2>
	<div class="row">
		<?php echo $form->labelEx($model,'ecologyText'); ?>
		<?php echo $form->textArea($model,'ecologyText',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ecologyText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeIcon'); ?>
		<?php echo $form->dropDownList($model,'ecologyWaterTypeIcon', CHtml::listData(Ecologywatertypes::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Water type -- ')); ?>
		<?php echo $form->error($model,'ecologyWaterTypeIcon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeText'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeText',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ecologyWaterTypeText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeIcon2'); ?>
		<?php echo $form->dropDownList($model,'ecologyWaterTypeIcon2', CHtml::listData(Ecologywatertypes::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Water type -- ')); ?>
		<?php echo $form->error($model,'ecologyWaterTypeIcon2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeText2'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeText2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ecologyWaterTypeText2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeIcon3'); ?>
		<?php echo $form->dropDownList($model,'ecologyWaterTypeIcon3', CHtml::listData(Ecologywatertypes::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Water type -- ')); ?>
		<?php echo $form->error($model,'ecologyWaterTypeIcon3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeText3'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeText3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ecologyWaterTypeText3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeIcon4'); ?>
		<?php echo $form->dropDownList($model,'ecologyWaterTypeIcon4', CHtml::listData(Ecologywatertypes::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Water type -- ')); ?>
		<?php echo $form->error($model,'ecologyWaterTypeIcon4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyWaterTypeText4'); ?>
		<?php echo $form->textField($model,'ecologyWaterTypeText4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ecologyWaterTypeText4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyDiet1'); ?>
		<?php echo $form->dropDownList($model,'ecologyDiet1', CHtml::listData(Diets::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Diet -- ')); ?>
		<?php echo $form->error($model,'ecologyDiet1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyDiet2'); ?>
		<?php echo $form->dropDownList($model,'ecologyDiet2', CHtml::listData(Diets::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Diet -- ')); ?>
		<?php echo $form->error($model,'ecologyDiet2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyDiet3'); ?>
		<?php echo $form->dropDownList($model,'ecologyDiet3', CHtml::listData(Diets::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Diet -- ')); ?>
		<?php echo $form->error($model,'ecologyDiet3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyDiet4'); ?>
		<?php echo $form->dropDownList($model,'ecologyDiet4', CHtml::listData(Diets::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Diet -- ')); ?>
		<?php echo $form->error($model,'ecologyDiet4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyDiet5'); ?>
		<?php echo $form->dropDownList($model,'ecologyDiet5', CHtml::listData(Diets::model()->findAll(), 'id', 'name'), array('prompt' => ' -- Select a Diet -- ')); ?>
		<?php echo $form->error($model,'ecologyDiet5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecologyText2'); ?>
		<?php echo $form->textArea($model,'ecologyText2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ecologyText2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->