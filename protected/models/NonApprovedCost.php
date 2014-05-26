<?php

/**
 * This is the model class for table "mortocyle_database.non_approved_cost".
 *
 * The followings are the available columns in table 'mortocyle_database.non_approved_cost':
 * @property string $reg_no
 * @property string $service_date
 * @property string $oil_lubricant_type
 * @property double $oil_lubricant_quantity
 * @property double $oil_lubricant_total_cost
 * @property string $outsource_material
 * @property double $outsource_material_cost
 * @property double $outsource_labour_total_cost
 * @property string $description_of_ourtsource_work_performed
 * @property integer $odometer_reading
 * @property string $duration_week
 * @property integer $costyear
 * @property integer $analysisperiod
 * @property integer $cost_rec_id
 * @property string $duration_start
 * @property string $duration_end
 * @property boolean $approaved
 * @property integer $user_created
 * @property string $date_created
 */
class NonApprovedCost extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NonApprovedCost the static model class
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
		return 'mortocyle_database.non_approved_cost';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('odometer_reading, costyear, analysisperiod, cost_rec_id, user_created', 'numerical', 'integerOnly'=>true),
			array('oil_lubricant_quantity, oil_lubricant_total_cost, outsource_material_cost, outsource_labour_total_cost', 'numerical'),
			array('reg_no, oil_lubricant_type, outsource_material, duration_week', 'length', 'max'=>255),
			array('service_date, description_of_ourtsource_work_performed, duration_start, duration_end, approaved, date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reg_no, service_date, oil_lubricant_type, oil_lubricant_quantity, oil_lubricant_total_cost, outsource_material, outsource_material_cost, outsource_labour_total_cost, description_of_ourtsource_work_performed, odometer_reading, duration_week, costyear, analysisperiod, cost_rec_id, duration_start, duration_end, approaved, user_created, date_created', 'safe', 'on'=>'search'),
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
			'service_date' => 'Service Date',
			'oil_lubricant_type' => 'Oil Lubricant Type',
			'oil_lubricant_quantity' => 'Oil Lubricant Quantity',
			'oil_lubricant_total_cost' => 'Oil Lubricant Total Cost',
			'outsource_material' => 'Outsource Material',
			'outsource_material_cost' => 'Outsource Material Cost',
			'outsource_labour_total_cost' => 'Outsource Labour Total Cost',
			'description_of_ourtsource_work_performed' => 'Description Of Ourtsource Work Performed',
			'odometer_reading' => 'Odometer Reading',
			'duration_week' => 'Duration Week',
			'costyear' => 'Costyear',
			'analysisperiod' => 'Analysisperiod',
			'cost_rec_id' => 'Cost Rec',
			'duration_start' => 'Duration Start',
			'duration_end' => 'Duration End',
			'approaved' => 'Approaved',
			'user_created' => 'User Created',
			'date_created' => 'Date Created',
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
		$criteria->compare('service_date',$this->service_date,true);
		$criteria->compare('oil_lubricant_type',$this->oil_lubricant_type,true);
		$criteria->compare('oil_lubricant_quantity',$this->oil_lubricant_quantity);
		$criteria->compare('oil_lubricant_total_cost',$this->oil_lubricant_total_cost);
		$criteria->compare('outsource_material',$this->outsource_material,true);
		$criteria->compare('outsource_material_cost',$this->outsource_material_cost);
		$criteria->compare('outsource_labour_total_cost',$this->outsource_labour_total_cost);
		$criteria->compare('description_of_ourtsource_work_performed',$this->description_of_ourtsource_work_performed,true);
		$criteria->compare('odometer_reading',$this->odometer_reading);
		$criteria->compare('duration_week',$this->duration_week,true);
		$criteria->compare('costyear',$this->costyear);
		$criteria->compare('analysisperiod',$this->analysisperiod);
		$criteria->compare('cost_rec_id',$this->cost_rec_id);
		$criteria->compare('duration_start',$this->duration_start,true);
		$criteria->compare('duration_end',$this->duration_end,true);
		$criteria->compare('approaved',$this->approaved);
		$criteria->compare('user_created',$this->user_created);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getStatus(){
		if(isset($this-> approaved) && $this-> approaved != false){
			return 'Approaved';
		}
		else{
			return 'Not Approaved';
		}
	}
	
	public function getUser(){
		$user = User::model() -> findByAttributes(array('user_id' => $this->user_created));
		return $user -> username;
	}
	
	public function getTotal(){
		return $this -> oil_lubricant_total_cost + $this -> outsource_material_cost + $this -> outsource_labour_total_cost;
	}
}