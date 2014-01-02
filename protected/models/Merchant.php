<?php

/**
 * This is the model class for table "merchant".
 *
 * The followings are the available columns in table 'merchant':
 * @property integer $id
 * @property string $merchant_name
 * @property string $added_on
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Commission[] $commissions
 * @property User $user
 */
class Merchant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'merchant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('merchant_name, user_id', 'required'),
			array('id, user_id', 'numerical', 'integerOnly'=>true),
			array('merchant_name', 'length', 'max'=>45),
			array('added_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, merchant_name, added_on, user_id', 'safe', 'on'=>'search'),
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
			'commissions' => array(self::HAS_MANY, 'Commission', 'merchant_id'),
			'campaign' => array(self::HAS_MANY, 'Campaign', 'merchant_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'merchant_name' => 'Merchant Name',
			'added_on' => 'Added On',
			'user_id' => 'User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('merchant_name',$this->merchant_name,true);
		$criteria->compare('added_on',$this->added_on,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Merchant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
