<?php

/**
 * This is the model class for table "diets".
 *
 * The followings are the available columns in table 'diets':
 * @property integer $id
 * @property string $name
 * @property string $icon
 *
 * The followings are the available model relations:
 * @property Species[] $species
 * @property Species[] $species1
 * @property Species[] $species2
 * @property Species[] $species3
 * @property Species[] $species4
 */
class Diets extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Diets the static model class
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
		return 'diets';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>50),
			array('icon', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, icon', 'safe', 'on'=>'search'),
                        array('icon', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'insert, update'),
                        array('icon', 'ext.EmptyNullValidator'),
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
			'species' => array(self::HAS_MANY, 'Species', 'ecologyDiet1'),
			'species1' => array(self::HAS_MANY, 'Species', 'ecologyDiet2'),
			'species2' => array(self::HAS_MANY, 'Species', 'ecologyDiet3'),
			'species3' => array(self::HAS_MANY, 'Species', 'ecologyDiet4'),
			'species4' => array(self::HAS_MANY, 'Species', 'ecologyDiet5'),
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
			'icon' => 'Icon',
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
		$criteria->compare('icon',$this->icon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}