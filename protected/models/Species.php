<?php

/**
 * This is the model class for table "species".
 *
 * The followings are the available columns in table 'species':
 * @property integer $id
 * @property string $name
 * @property string $scientificName
 * @property string $discoveryAuthor
 * @property integer $discoveryYear
 * @property string $order
 * @property string $family
 * @property string $photo
 * @property string $photoAuthor
 * @property string $breedingMale
 * @property string $breedingFemale
 * @property string $breedingText
 * @property integer $breedingWaterType
 * @property string $curiosityText
 * @property string $curiosityImg1
 * @property string $curiosityImg2
 * @property string $morphologyText
 * @property string $morphologyPhoto
 * @property string $morphologyAuthor
 * @property string $morphologyReminderPhoto1
 * @property string $morphologyReminderPhoto2
 * @property string $morphologyReminderPhoto3
 * @property string $morphologyReminderPhoto4
 * @property string $morphologyDetailHeight
 * @property string $morphologyDetailWeight
 * @property string $morphologyDetailAge
 * @property string $distributionOrigin
 * @property string $distributionIntroducted
 * @property string $distributionPhoto
 * @property string $ecologyText
 * @property integer $ecologyWaterTypeIcon
 * @property string $ecologyWaterTypeText
 * @property integer $ecologyWaterTypeIcon2
 * @property string $ecologyWaterTypeText2
 * @property integer $ecologyWaterTypeIcon3
 * @property string $ecologyWaterTypeText3
 * @property integer $ecologyWaterTypeIcon4
 * @property string $ecologyWaterTypeText4
 * @property integer $ecologyDiet1
 * @property integer $ecologyDiet2
 * @property integer $ecologyDiet3
 * @property integer $ecologyDiet4
 * @property integer $ecologyDiet5
 * @property string $ecologyText2
 *
 * The followings are the available model relations:
 * @property Breedingwatertypes $breedingWaterType0
 * @property Diets $ecologyDiet10
 * @property Diets $ecologyDiet20
 * @property Diets $ecologyDiet30
 * @property Diets $ecologyDiet40
 * @property Diets $ecologyDiet50
 * @property Ecologywatertypes $ecologyWaterTypeIcon0
 */
class Species extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Species the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'species';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, scientificName, discoveryAuthor, discoveryYear, order, family', 'required'),
			array('discoveryYear, breedingWaterType, ecologyWaterTypeIcon, ecologyWaterTypeIcon2, ecologyWaterTypeIcon3, ecologyWaterTypeIcon4, ecologyDiet1, ecologyDiet2, ecologyDiet3, ecologyDiet4, ecologyDiet5', 'numerical', 'integerOnly'=>true),
			array('name, scientificName, discoveryAuthor, order, family, photoAuthor, breedingMale, breedingFemale, morphologyAuthor, morphologyDetailHeight, morphologyDetailWeight, morphologyDetailAge, ecologyWaterTypeText, ecologyWaterTypeText2, ecologyWaterTypeText3, ecologyWaterTypeText4, curiosityImgAuthor1, curiosityImgAuthor2, distributionPhotoAuthor', 'length', 'max'=>50),
			array('photo, curiosityImg1, curiosityImg2, morphologyPhoto, morphologyReminderPhoto1, morphologyReminderPhoto2, morphologyReminderPhoto3, morphologyReminderPhoto4, distributionPhoto', 'length', 'max'=>200),
			array('breedingText, curiosityText, morphologyText, distributionOrigin, distributionIntroducted, ecologyText, ecologyText2', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, scientificName, discoveryAuthor, discoveryYear, order, family, photo, photoAuthor, breedingMale, breedingFemale, breedingText, breedingWaterType, curiosityText, curiosityImg1, curiosityImg2, morphologyText, morphologyPhoto, morphologyAuthor, morphologyReminderPhoto1, morphologyReminderPhoto2, morphologyReminderPhoto3, morphologyReminderPhoto4, morphologyDetailHeight, morphologyDetailWeight, morphologyDetailAge, distributionOrigin, distributionIntroducted, distributionPhoto, ecologyText, ecologyWaterTypeIcon, ecologyWaterTypeText, ecologyWaterTypeIcon2, ecologyWaterTypeText2, ecologyWaterTypeIcon3, ecologyWaterTypeText3, ecologyWaterTypeIcon4, ecologyWaterTypeText4, ecologyDiet1, ecologyDiet2, ecologyDiet3, ecologyDiet4, ecologyDiet5, ecologyText2, curiosityImgAuthor1, curiosityImgAuthor2, distributionPhotoAuthor', 'safe', 'on'=>'search'),
                        // photos
                        array('photo, curiosityImg1, curiosityImg2, morphologyPhoto, morphologyReminderPhoto1, morphologyReminderPhoto2, morphologyReminderPhoto3, morphologyReminderPhoto4, distributionPhoto', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'insert, update'),
                    
                        //null converter
                        array('photo, photoAuthor, breedingMale, breedingFemale, breedingText, breedingWaterType, curiosityText, curiosityImg1, curiosityImg2, morphologyText, morphologyPhoto, morphologyAuthor, morphologyReminderPhoto1, morphologyReminderPhoto2, morphologyReminderPhoto3, morphologyReminderPhoto4, morphologyDetailHeight, morphologyDetailWeight, morphologyDetailAge, distributionOrigin, distributionIntroducted, distributionPhoto, ecologyText, ecologyWaterTypeIcon, ecologyWaterTypeText, ecologyWaterTypeIcon2, ecologyWaterTypeText2, ecologyWaterTypeIcon3, ecologyWaterTypeText3, ecologyWaterTypeIcon4, ecologyWaterTypeText4, ecologyDiet1, ecologyDiet2, ecologyDiet3, ecologyDiet4, ecologyDiet5, ecologyText2, curiosityImgAuthor1, curiosityImgAuthor2, distributionPhotoAuthor', 'ext.EmptyNullValidator'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'breedingWaterType0' => array(self::BELONGS_TO, 'Breedingwatertypes', 'breedingWaterType'),
			'ecologyDiet10' => array(self::BELONGS_TO, 'Diets', 'ecologyDiet1'),
			'ecologyDiet20' => array(self::BELONGS_TO, 'Diets', 'ecologyDiet2'),
			'ecologyDiet30' => array(self::BELONGS_TO, 'Diets', 'ecologyDiet3'),
			'ecologyDiet40' => array(self::BELONGS_TO, 'Diets', 'ecologyDiet4'),
			'ecologyDiet50' => array(self::BELONGS_TO, 'Diets', 'ecologyDiet5'),
			'ecologyWaterTypeIcon0' => array(self::BELONGS_TO, 'Ecologywatertypes', 'ecologyWaterTypeIcon'),
			'ecologyWaterTypeIcon20' => array(self::BELONGS_TO, 'Ecologywatertypes', 'ecologyWaterTypeIcon2'),
			'ecologyWaterTypeIcon30' => array(self::BELONGS_TO, 'Ecologywatertypes', 'ecologyWaterTypeIcon3'),
			'ecologyWaterTypeIcon40' => array(self::BELONGS_TO, 'Ecologywatertypes', 'ecologyWaterTypeIcon4'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'scientificName' => 'Scientific Name',
			'discoveryAuthor' => 'Discovery Author',
			'discoveryYear' => 'Discovery Year',
			'order' => 'Order',
			'family' => 'Family',
			'photo' => 'Photo',
			'photoAuthor' => 'Photo Author',
			'breedingMale' => 'Breeding Male',
			'breedingFemale' => 'Breeding Female',
			'breedingText' => 'Breeding Text',
			'breedingWaterType' => 'Breeding Water Type',
			'curiosityText' => 'Curiosity Text',
			'curiosityImg1' => 'Curiosity Img1',
			'curiosityImgAuthor1' => 'Curiosity Img Author 1',
			'curiosityImg2' => 'Curiosity Img2',
			'curiosityImgAuthor2' => 'Curiosity Img Author 2',
			'morphologyText' => 'Morphology Text',
			'morphologyPhoto' => 'Morphology Photo',
			'morphologyAuthor' => 'Morphology Author',
			'morphologyReminderPhoto1' => 'Morphology Reminder Photo1',
			'morphologyReminderPhoto2' => 'Morphology Reminder Photo2',
			'morphologyReminderPhoto3' => 'Morphology Reminder Photo3',
			'morphologyReminderPhoto4' => 'Morphology Reminder Photo4',
			'morphologyDetailHeight' => 'Morphology Detail Height',
			'morphologyDetailWeight' => 'Morphology Detail Weight',
			'morphologyDetailAge' => 'Morphology Detail Age',
			'distributionOrigin' => 'Distribution Origin',
			'distributionIntroducted' => 'Distribution Introducted',
			'distributionPhoto' => 'Distribution Photo',
			'distributionPhotoAuthor' => 'Distribution Photo Author',
			'ecologyText' => 'Ecology Text',
			'ecologyWaterTypeIcon' => 'Ecology Water Type Icon',
			'ecologyWaterTypeText' => 'Ecology Water Type Text',
			'ecologyWaterTypeIcon' => 'Ecology Water Type Icon 2',
			'ecologyWaterTypeText' => 'Ecology Water Type Text 2',
			'ecologyWaterTypeIcon' => 'Ecology Water Type Icon 3',
			'ecologyWaterTypeText' => 'Ecology Water Type Text 3',
			'ecologyWaterTypeIcon' => 'Ecology Water Type Icon 4',
			'ecologyWaterTypeText' => 'Ecology Water Type Text 4',
			'ecologyDiet1' => 'Ecology Diet1',
			'ecologyDiet2' => 'Ecology Diet2',
			'ecologyDiet3' => 'Ecology Diet3',
			'ecologyDiet4' => 'Ecology Diet4',
			'ecologyDiet5' => 'Ecology Diet5',
			'ecologyText2' => 'Ecology Text2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('scientificName',$this->scientificName,true);
		$criteria->compare('discoveryAuthor',$this->discoveryAuthor,true);
		$criteria->compare('discoveryYear',$this->discoveryYear);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('family',$this->family,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('photoAuthor',$this->photoAuthor,true);
		$criteria->compare('breedingMale',$this->breedingMale,true);
		$criteria->compare('breedingFemale',$this->breedingFemale,true);
		$criteria->compare('breedingText',$this->breedingText,true);
		$criteria->compare('breedingWaterType',$this->breedingWaterType);
		$criteria->compare('curiosityText',$this->curiosityText,true);
		$criteria->compare('curiosityImg1',$this->curiosityImg1,true);
		$criteria->compare('curiosityImg2',$this->curiosityImg2,true);
		$criteria->compare('curiosityImgAuthor1',$this->curiosityImgAuthor1,true);
		$criteria->compare('curiosityImgAuthor2',$this->curiosityImgAuthor2,true);
		$criteria->compare('morphologyText',$this->morphologyText,true);
		$criteria->compare('morphologyPhoto',$this->morphologyPhoto,true);
		$criteria->compare('morphologyAuthor',$this->morphologyAuthor,true);
		$criteria->compare('morphologyReminderPhoto1',$this->morphologyReminderPhoto1,true);
		$criteria->compare('morphologyReminderPhoto2',$this->morphologyReminderPhoto2,true);
		$criteria->compare('morphologyReminderPhoto3',$this->morphologyReminderPhoto3,true);
		$criteria->compare('morphologyReminderPhoto4',$this->morphologyReminderPhoto4,true);
		$criteria->compare('morphologyDetailHeight',$this->morphologyDetailHeight,true);
		$criteria->compare('morphologyDetailWeight',$this->morphologyDetailWeight,true);
		$criteria->compare('morphologyDetailAge',$this->morphologyDetailAge,true);
		$criteria->compare('distributionOrigin',$this->distributionOrigin,true);
		$criteria->compare('distributionIntroducted',$this->distributionIntroducted,true);
		$criteria->compare('distributionPhoto',$this->distributionPhoto,true);
		$criteria->compare('distributionPhotoAuthor',$this->distributionPhotoAuthor,true);
		$criteria->compare('ecologyText',$this->ecologyText,true);
		$criteria->compare('ecologyWaterTypeIcon',$this->ecologyWaterTypeIcon);
		$criteria->compare('ecologyWaterTypeText',$this->ecologyWaterTypeText,true);
		$criteria->compare('ecologyWaterTypeIcon2',$this->ecologyWaterTypeIcon2);
		$criteria->compare('ecologyWaterTypeText2',$this->ecologyWaterTypeText2,true);
		$criteria->compare('ecologyWaterTypeIcon3',$this->ecologyWaterTypeIcon3);
		$criteria->compare('ecologyWaterTypeText3',$this->ecologyWaterTypeText3,true);
		$criteria->compare('ecologyWaterTypeIcon4',$this->ecologyWaterTypeIcon4);
		$criteria->compare('ecologyWaterTypeText4',$this->ecologyWaterTypeText4,true);
		$criteria->compare('ecologyDiet1',$this->ecologyDiet1);
		$criteria->compare('ecologyDiet2',$this->ecologyDiet2);
		$criteria->compare('ecologyDiet3',$this->ecologyDiet3);
		$criteria->compare('ecologyDiet4',$this->ecologyDiet4);
		$criteria->compare('ecologyDiet5',$this->ecologyDiet5);
		$criteria->compare('ecologyText2',$this->ecologyText2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}