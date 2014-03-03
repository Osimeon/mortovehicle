<?php

/**
 * This is the model class for table "mortocyle_database.office_total_by_period".
 *
 * The followings are the available columns in table 'mortocyle_database.office_total_by_period':
 * @property string $morto_reg_no
 * @property integer $analysisperiod
 * @property double $tcost
 * @property string $office_name
 */
class OfficeTotalByPeriod extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OfficeTotalByPeriod the static model class
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
		return 'mortocyle_database.office_total_by_period';
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
			array('tcost', 'numerical'),
			array('morto_reg_no', 'length', 'max'=>255),
			array('office_name', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('morto_reg_no, analysisperiod, tcost, office_name', 'safe', 'on'=>'search'),
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
			'analysisperiod' => 'Analysisperiod',
			'tcost' => 'Tcost',
			'office_name' => 'Office Name',
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
		$criteria->compare('analysisperiod',$this->analysisperiod);
		$criteria->compare('tcost',$this->tcost);
		$criteria->compare('office_name',$this->office_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}