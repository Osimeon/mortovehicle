<?php

/**
 * This is the model class for table "mortocyle_database.aggregate_by_office".
 *
 * The followings are the available columns in table 'mortocyle_database.aggregate_by_office':
 * @property string $reg_no
 * @property string $office_name
 * @property double $maint
 * @property double $fcost
 * @property double $tcost
 * @property string $kmcovered
 * @property double $fconsumed
 * @property double $kmperlitre
 * @property double $shsperlitre
 */
class AggregateByOffice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AggregateByOffice the static model class
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
		return 'mortocyle_database.aggregate_by_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('maint, fcost, tcost, fconsumed, kmperlitre, shsperlitre', 'numerical'),
			array('reg_no', 'length', 'max'=>255),
			array('office_name, kmcovered', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reg_no, office_name, maint, fcost, tcost, kmcovered, fconsumed, kmperlitre, shsperlitre', 'safe', 'on'=>'search'),
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
			'office_name' => 'Office Name',
			'maint' => 'Maint',
			'fcost' => 'Fcost',
			'tcost' => 'Tcost',
			'kmcovered' => 'Kmcovered',
			'fconsumed' => 'Fconsumed',
			'kmperlitre' => 'Kmperlitre',
			'shsperlitre' => 'Shsperlitre',
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
		$criteria->compare('office_name',$this->office_name,true);
		$criteria->compare('maint',$this->maint);
		$criteria->compare('fcost',$this->fcost);
		$criteria->compare('tcost',$this->tcost);
		$criteria->compare('kmcovered',$this->kmcovered,true);
		$criteria->compare('fconsumed',$this->fconsumed);
		$criteria->compare('kmperlitre',$this->kmperlitre);
		$criteria->compare('shsperlitre',$this->shsperlitre);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}