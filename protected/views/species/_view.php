<?php
/* @var $this SpeciesController */
/* @var $data Species */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scientificName')); ?>:</b>
	<?php echo CHtml::encode($data->scientificName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discoveryAuthor')); ?>:</b>
	<?php echo CHtml::encode($data->discoveryAuthor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discoveryYear')); ?>:</b>
	<?php echo CHtml::encode($data->discoveryYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family')); ?>:</b>
	<?php echo CHtml::encode($data->family); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photoAuthor')); ?>:</b>
	<?php echo CHtml::encode($data->photoAuthor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breedingMale')); ?>:</b>
	<?php echo CHtml::encode($data->breedingMale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breedingFemale')); ?>:</b>
	<?php echo CHtml::encode($data->breedingFemale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breedingText')); ?>:</b>
	<?php echo CHtml::encode($data->breedingText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breedingWaterType')); ?>:</b>
	<?php echo CHtml::encode($data->breedingWaterType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curiosityText')); ?>:</b>
	<?php echo CHtml::encode($data->curiosityText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curiosityImg1')); ?>:</b>
	<?php echo CHtml::encode($data->curiosityImg1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curiosityImg2')); ?>:</b>
	<?php echo CHtml::encode($data->curiosityImg2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyText')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyPhoto')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyPhoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyAuthor')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyAuthor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyReminderPhoto1')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyReminderPhoto1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyReminderPhoto2')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyReminderPhoto2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyReminderPhoto3')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyReminderPhoto3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyReminderPhoto4')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyReminderPhoto4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyDetailHeight')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyDetailHeight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyDetailWeight')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyDetailWeight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morphologyDetailAge')); ?>:</b>
	<?php echo CHtml::encode($data->morphologyDetailAge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distributionOrigin')); ?>:</b>
	<?php echo CHtml::encode($data->distributionOrigin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distributionIntroducted')); ?>:</b>
	<?php echo CHtml::encode($data->distributionIntroducted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distributionPhoto')); ?>:</b>
	<?php echo CHtml::encode($data->distributionPhoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyText')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyWaterTypeIcon')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyWaterTypeIcon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyWaterTypeText')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyWaterTypeText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyDiet1')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyDiet1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyDiet2')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyDiet2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyDiet3')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyDiet3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyDiet4')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyDiet4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyDiet5')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyDiet5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecologyText2')); ?>:</b>
	<?php echo CHtml::encode($data->ecologyText2); ?>
	<br />

	*/ ?>

</div>