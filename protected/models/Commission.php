<?php

/**
 * This is the model class for table "commission".
 *
 * The followings are the available columns in table 'commission':
 * @property integer $id
 * @property integer $merchant_id
 * @property integer $affiliate_id
 * @property string $date_of_report
 * @property integer $commission
 * @property integer $no_of_clicks
 * @property integer $no_of_sales
 * @property integer $user_id
 * @property string $added_on
 *
 * The followings are the available model relations:
 * @property Affiliate $affiliate
 * @property Merchant $merchant
 * @property User $user
 */
class Commission extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'commission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('merchant_id, affiliate_id, date_of_report, commission, no_of_clicks, no_of_sales, user_id', 'required'),
			array('id, merchant_id, affiliate_id, commission, no_of_clicks, no_of_sales, user_id', 'numerical', 'integerOnly'=>true),
			array('added_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, merchant_id, affiliate_id, date_of_report, commission, no_of_clicks, no_of_sales, user_id, added_on', 'safe', 'on'=>'search'),
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
			'affiliate' => array(self::BELONGS_TO, 'Affiliate', 'affiliate_id'),
			'merchant' => array(self::BELONGS_TO, 'Merchant', 'merchant_id'),
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
			'merchant_id' => 'Merchant',
			'affiliate_id' => 'Affiliate',
			'date_of_report' => 'Date of Report',
			'commission' => 'Commission',
			'no_of_clicks' => 'No of Clicks',
			'no_of_sales' => 'No of Sales',
			'user_id' => 'User',
			'added_on' => 'Added On',
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
		$criteria->compare('merchant_id',$this->merchant_id);
		$criteria->compare('affiliate_id',$this->affiliate_id);
		$criteria->compare('date_of_report',$this->date_of_report,true);
		$criteria->compare('commission',$this->commission);
		$criteria->compare('no_of_clicks',$this->no_of_clicks);
		$criteria->compare('no_of_sales',$this->no_of_sales);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('added_on',$this->added_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
              'defaultOrder' => array(
                 'date_of_report' => CSort::SORT_DESC
              ),
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Commission the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
