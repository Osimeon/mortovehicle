<?php

class VehicleAnalysisRecordsController extends Controller 
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'. 
	 */
	public $layout='//layouts/column2'; 
 
	/**    
	 * @return array action filters
	 */  
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules 
	 */
	public function accessRules()  
	{  
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions   
				'actions'=>array('index','view','report','details','summary'),
				'roles' => array('reader'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','admin'),
				'roles' => array('writer'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','create'),
				'roles' => array('admin'),
			),
			array('deny',  // deny all users
				//'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$details = new CActiveDataProvider('VehicleDetails',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('index', array(
            'details' => $details,
        ));
	}
	
	/**
	 * Report Action
	 */
	public function actionReport(){
	 	$report = new CActiveDataProvider('VehicleAggregate',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('report', array(
            'report' => $report,
        )); 
	}
	
	/**
	 * Summary Action
	 */
	public function actionSummary(){
	 	$report = new CActiveDataProvider('VehicleSummary',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('summary', array(
            'summary' => $report,
        )); 
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=VehicleUsers::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='data-entry-log-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
