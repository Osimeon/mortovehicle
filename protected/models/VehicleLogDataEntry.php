<?php

/**
 * This is the model class for table "vehicle_dbms.vehicle_usage_log_a".
 *
 * The followings are the available columns in table 'vehicle_dbms.vehicle_usage_log_a':
 * @property string $morto_reg_no
 * @property string $date_refilled_to_full_tank
 * @property double $fuel_quantity
 * @property integer $odometer_current_reading
 * @property integer $odometer_previous_reading
 * @property integer $kilometers_covered
 * @property double $kilometers_covered_per_litre
 * @property double $fuel_cost_in_kshs
 * @property string $duration_week
 * @property integer $analysis_period
 */
class VehicleLogDataEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VehicleLogDataEntry the static model class
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
		return 'vehicle_dbms.vehicle_usage_log_a';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('odometer_current_reading, odometer_previous_reading, kilometers_covered, analysis_period', 'numerical', 'integerOnly'=>true),
			array('fuel_quantity, kilometers_covered_per_litre, fuel_cost_in_kshs', 'numerical'),
			array('morto_reg_no, duration_week', 'length', 'max'=>255),
			array('date_refilled_to_full_tank', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('morto_reg_no, date_refilled_to_full_tank, fuel_quantity, odometer_current_reading, odometer_previous_reading, kilometers_covered, kilometers_covered_per_litre, fuel_cost_in_kshs, duration_week, analysis_period', 'safe', 'on'=>'search'),
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
			'morto_reg_no' => 'Morto Reg No',
			'date_refilled_to_full_tank' => 'Date Refilled To Full Tank',
			'fuel_quantity' => 'Fuel Quantity',
			'odometer_current_reading' => 'Odometer Current Reading',
			'odometer_previous_reading' => 'Odometer Previous Reading',
			'kilometers_covered' => 'Kilometers Covered',
			'kilometers_covered_per_litre' => 'Kilometers Covered Per Litre',
			'fuel_cost_in_kshs' => 'Fuel Cost In Kshs',
			'duration_week' => 'Duration Week',
			'analysis_period' => 'Analysis Period',
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

		$criteria->compare('morto_reg_no',$this->morto_reg_no,true);
		$criteria->compare('date_refilled_to_full_tank',$this->date_refilled_to_full_tank,true);
		$criteria->compare('fuel_quantity',$this->fuel_quantity);
		$criteria->compare('odometer_current_reading',$this->odometer_current_reading);
		$criteria->compare('odometer_previous_reading',$this->odometer_previous_reading);
		$criteria->compare('kilometers_covered',$this->kilometers_covered);
		$criteria->compare('kilometers_covered_per_litre',$this->kilometers_covered_per_litre);
		$criteria->compare('fuel_cost_in_kshs',$this->fuel_cost_in_kshs);
		$criteria->compare('duration_week',$this->duration_week,true);
		$criteria->compare('analysis_period',$this->analysis_period);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}