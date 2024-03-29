<?php

/**
 * This is the model class for table "tbl_operdate".
 *
 * The followings are the available columns in table 'tbl_operdate':
 * @property string $operdate
 *
 * The followings are the available model relations:
 * @property Mgrday[] $mgrdays
 * @property Weeknum[] $weeknums
 * @property Weeknum[] $weeknums1
 */
class Operdate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Operdate the static model class
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
		return 'tbl_operdate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('operdate', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('operdate', 'safe', 'on'=>'search'),
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
			'mgrdays' => array(self::HAS_MANY, 'Mgrday', 'operdate'),
			'weeknums' => array(self::HAS_MANY, 'Weeknum', 'openweekdate'),
			'weeknums1' => array(self::HAS_MANY, 'Weeknum', 'closeweekdate'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'operdate' => 'Operdate',
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

		$criteria->compare('operdate',$this->operdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}