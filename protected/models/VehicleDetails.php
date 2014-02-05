<?php

/**
 * This is the model class for table "vehicle_dbms.vehicle_details".
 *
 * The followings are the available columns in table 'vehicle_dbms.vehicle_details':
 * @property string $reg_no
 * @property string $dept
 * @property string $officebase_location
 * @property string $vehicle_desc
 * @property integer $fuel_card_no
 */
class VehicleDetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VehicleDetails the static model class
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
		return 'vehicle_dbms.vehicle_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fuel_card_no', 'numerical', 'integerOnly'=>true),
			array('reg_no, dept, officebase_location, vehicle_desc', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reg_no, dept, officebase_location, vehicle_desc, fuel_card_no', 'safe', 'on'=>'search'),
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
			'reg_no' => 'Reg No',
			'dept' => 'Dept',
			'officebase_location' => 'Officebase Location',
			'vehicle_desc' => 'Vehicle Desc',
			'fuel_card_no' => 'Fuel Card No',
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

		$criteria->compare('reg_no',$this->reg_no,true);
		$criteria->compare('dept',$this->dept,true);
		$criteria->compare('officebase_location',$this->officebase_location,true);
		$criteria->compare('vehicle_desc',$this->vehicle_desc,true);
		$criteria->compare('fuel_card_no',$this->fuel_card_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}