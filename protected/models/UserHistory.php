<?php

/**
 * This is the model class for table "mortocyle_database.user_history".
 *
 * The followings are the available columns in table 'mortocyle_database.user_history':
 * @property integer $rec_id
 * @property integer $staff_number
 * @property string $rec_type
 * @property integer $rec_number
 * @property string $date_of_action
 */
class UserHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserHistory the static model class
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
		return 'mortocyle_database.user_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staff_number, rec_number', 'numerical', 'integerOnly'=>true),
			array('rec_type, date_of_action', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rec_id, staff_number, rec_type, rec_number, date_of_action', 'safe', 'on'=>'search'),
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
			'rec_id' => 'Rec',
			'staff_number' => 'Staff Number',
			'rec_type' => 'Rec Type',
			'rec_number' => 'Rec Number',
			'date_of_action' => 'Date Of Action',
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

		$criteria->compare('rec_id',$this->rec_id);
		$criteria->compare('staff_number',$this->staff_number);
		$criteria->compare('rec_type',$this->rec_type,true);
		$criteria->compare('rec_number',$this->rec_number);
		$criteria->compare('date_of_action',$this->date_of_action,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}