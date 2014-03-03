<?php

/**
 * This is the model class for table "mortocyle_database.periodic_total_maintenance".
 *
 * The followings are the available columns in table 'mortocyle_database.periodic_total_maintenance':
 * @property string $office_name
 * @property string $morto_reg_no
 * @property integer $analysisperiod
 * @property double $total_maintenance_a
 */
class PeriodicTotalMaintenance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PeriodicTotalMaintenance the static model class
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
		return 'mortocyle_database.periodic_total_maintenance';
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
			array('total_maintenance_a', 'numerical'),
			array('morto_reg_no', 'length', 'max'=>255),
			array('office_name', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('office_name, morto_reg_no, analysisperiod, total_maintenance_a', 'safe', 'on'=>'search'),
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
			'office_name' => 'Office Name',
			'morto_reg_no' => 'Morto Reg No',
			'analysisperiod' => 'Analysisperiod',
			'total_maintenance_a' => 'Total Maintenance A',
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

		$criteria->compare('office_name',$this->office_name,true);
		$criteria->compare('morto_reg_no',$this->morto_reg_no,true);
		$criteria->compare('analysisperiod',$this->analysisperiod);
		$criteria->compare('total_maintenance_a',$this->total_maintenance_a);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}