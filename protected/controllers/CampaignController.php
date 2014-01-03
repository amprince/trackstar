<?php

class CampaignController extends Controller
{

	public $layout='home';
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','AddUser','AddTransaction','AddMerchant','AddAffiliate','logout','generateReports','ajaxReports','AddCampaign'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionAddCampaign() {
		$model = new Campaign ;
		
		$merchant = Merchant::model()->findAll();
		$affiliate = Affiliate::model()->findAll();
		//$present=Campaign::model()->with('merchant','affiliate')->findAll();
		
		$criteria = new CDbCriteria ;
		//$criteria->condition = "affiliate_id = $value AND campaign_date >= '$dateStart' AND campaign_date <= '$dateEnd'  ";
		$criteria->order = 'campaign_date DESC';
		$criteria->with = array('merchant','affiliate',);
		$criteria->limit = 10;
		$present=Campaign::model()->with('merchant','affiliate')->findAll($criteria);
		
		//var_dump($present);
		if(isset($_POST["Campaign"]))
		{	
			$model->merchant_id = $_POST['Campaign']['merchant_id'] ;
			$model->affiliate_id = $_POST['Campaign']['affiliate_id'] ;
			$model->campaign_date = date("Y-m-d", strtotime($_POST['Campaign']['campaign_date']));
			//$model->commission = $_POST['Campaign']['commission'] ;
			$model->estimated_value = $_POST['Campaign']['estimated_value'] ;
			$model->added_by = Yii::app()->session['user_id'] ;
			$model->added_on = new CDbExpression('NOW()') ;
			$model->save();
			if(0) {
				$present=Commission::model()->with('merchant','affiliate')->findAll();
				$this->render('addCampaign',array(
				'model'=>new Campaign,
				'merchant'=>$merchant,
				'affiliate'=>$affiliate,
				'message' => 'Campaign Saved',
				'present'=>$present,
				'fixedType'=>$_POST['fixedType'],
				'fixedValue'=>$_POST['fixedValue'],
			));
			} else {
				
				$this->render('addCampaign',array(
				'model'=> $model,
				'merchant'=>$merchant,
				'affiliate'=>$affiliate,
				'present'=>$present,
				'fixedType'=>$_POST['fixedType'],
				'fixedValue'=>$_POST['fixedValue'],
				));
				
			}
		}
		
		if(!isset($_POST["Campaign"]))
		{
			$this->render('addCampaign', array(
			'model'=>$model,
			'merchant'=>$merchant,
			'affiliate'=>$affiliate,
			'present'=>$present,
			));
		}
		
		
		
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}