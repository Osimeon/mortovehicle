<?php

/**
 * This is the model class for table "mortocyle_database._fuel_consumed".
 *
 * The followings are the available columns in table 'mortocyle_database._fuel_consumed':
 * @property integer $analysisperiod
 * @property string $startdate
 * @property string $enddate
 * @property string $office_name
 * @property double $fuel_consumed
 */
class FuelConsumed extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FuelConsumed the static model class
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
		return 'mortocyle_database._fuel_consumed';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('analysisperiod', 'numerical', 'integerOnly'=>true),
			array('fuel_consumed', 'numerical'),
			array('startdate, enddate, office_name', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('analysisperiod, startdate, enddate, office_name, fuel_consumed', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'analysisperiod' => 'Analysisperiod',
			'startdate' => 'Startdate',
			'enddate' => 'Enddate',
			'office_name' => 'Office Name',
			'fuel_consumed' => 'Fuel Consumed',
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

		$criteria->compare('analysisperiod',$this->analysisperiod);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('enddate',$this->enddate,true);
		$criteria->compare('office_name',$this->office_name,true);
		$criteria->compare('fuel_consumed',$this->fuel_consumed);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}