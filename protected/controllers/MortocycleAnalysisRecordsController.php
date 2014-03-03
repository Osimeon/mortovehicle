<?php

class MortocycleAnalysisRecordsController extends Controller{ 
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'. 
	 */
	public $layout='//layouts/column2'; 

	/**  
	 * @return array action filters
	 */  
	public function filters(){
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
	public function accessRules(){  
		return array( 
			array('allow',  // allow all users to perform 'index' and 'view' actions   
				'actions'=>array('index','view','report','details','aggregate','users','offices','cumilative','permorto','fconsumed','omaint','otcost','menufilter','filterme','officecostbyperiod'),
				'roles' => array('reader'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles' => array('writer'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
	public function actionView($id){
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	/*
	 * Fuel Consumed
	 */
	 public function actionOtcost(){
	 	$otcost = new CActiveDataProvider('TotalCost',array(
        		'pagination' => array(
                        'pageSize' => 30,
                 ),
				'sort' => array(
                     'defaultOrder' => 'office_name, analysisperiod ASC',
                ),
		));
		
		$this->render('otcost', array(
            'otcost' => $otcost,
        ));
	 }
	 
	/*
	 * Fuel Consumed
	 */
	 public function actionOmaint(){
	 	$omaint = new CActiveDataProvider('TotalMaintenance',array(
        		'pagination' => array(
                        'pageSize' => 30,
                 ),
				'sort' => array(
                     'defaultOrder' => 'office_name, analysisperiod ASC',
                ),
		));
		
		$this->render('omaint', array(
            'omaint' => $omaint,
        ));
	 }
	 
	/*
	 * Fuel Consumed
	 */
	 public function actionFconsumed(){
	 	$fconsumed = new CActiveDataProvider('FuelConsumed',array(
        		'pagination' => array(
                        'pageSize' => 30,
                 ),
				'sort' => array(
                     'defaultOrder' => 'office_name ASC',
                ),
		));
		
		$this->render('fconsumed', array(
            'fconsumed' => $fconsumed,
        ));
	 }
	 
	 /*
	  * Maintainance Per Mortocycle
	  */
	 public function actionPermorto(){
	 	$permorto = new CActiveDataProvider('PeriodicTotalMaintenance',array(
        		'pagination' => array(
                        'pageSize' => 30,
                 ),
				'sort' => array(
                     'defaultOrder' => 'office_name, analysisperiod ASC',
                ),
		));
		
		$this->render('permorto', array(
            'permorto' => $permorto,
        ));
	 }
	 
	 /*
	  * Cumilative
	  */	 
	 public function actionCumilative(){
	 	$cumilative = new CActiveDataProvider('CumilativeSummary',array(
        		'pagination' => array(
                        'pageSize' => 30,
                 ),
				'sort' => array(
                     'defaultOrder' => 'office_name ASC',
                ),
		));
		
		$this->render('cumilative', array(
            'cumilative' => $cumilative,
        ));
	 }
	 
	/*
	 * All Offices
	 */
	 public function actionOffices(){
	 	$allOffices = new CActiveDataProvider('Office',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		
		$this->render('offices', array(
            'allOffices' => $allOffices,
        ));
	 }
	 
	/*
	 * Give all report models
	 */
	public function actionReport(){
		$allAnalysis = new CActiveDataProvider('MortocycleAnalysisRecords',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		if ($this->isExportRequest()) {
            set_time_limit(0); //Uncomment to export lage datasets
            //Add to the csv a single line of text
            $this->exportCSV(array('POSTS WITH FILTER:'), null, false);
            //Add to the csv a single model data with 3 empty rows after the data
            $this->exportCSV($model, array_keys($model->attributeLabels()), false, 3);
            //Add to the csv a lot of models from a CDataProvider
            $this->exportCSV($model->search(), array('id', 'title', 'user.id', 'user.name'));
        }
		$this->render('analysisReport', array(
            'allAnalysis' => $allAnalysis,
        ));
	}
	
	/**
	 * Office Cost By Period
	 **/
	public function actionOfficeCostByPeriod(){
		$allAnalysis = new CActiveDataProvider('OfficeTotalByPeriod',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('officebyperiod', array(
            'allAnalysis' => $allAnalysis,
        ));
	}
	
	/*
	 * Aggregate Summary
	 */
	 public function actionAggregate(){
	 	$allAggregate = new CActiveDataProvider('AllAggregate',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('aggregateReport', array(
            'aggregate' => $allAggregate,
        ));
	 }
	 
	 /*
	  * All Mortocycle Users
	  */
	 public function actionUsers(){
	 	$dataProvider=new CActiveDataProvider('MortocycleUsers');
		$this->render('mortousers',array(
			'dataProvider'=>$dataProvider,
		));
	 }
	 
	/*
	 * Morto Details
	 */
	public function actionDetails(){
		$details = new CActiveDataProvider('Details',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('index', array(
            'details' => $details,
        ));
	}	
	/**
	 * Lists all models.
	 */
	public function actionIndex(){
		$details = new CActiveDataProvider('Details',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		$this->render('index', array(
            'details' => $details,
        ));
	}
	
	public function actionMenuFilter(){
		$this->render('menufilter');
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin(){
		$model=new DataEntryLog('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DataEntryLog']))
			$model->attributes=$_GET['DataEntryLog'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionFilterMe(){
		$model = new TmpFilter;
		
		$this->render('filterme', array(
            'model' => $model,
        ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id){
		$model=MortocycleUsers::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model){
		if(isset($_POST['ajax']) && $_POST['ajax']==='data-entry-log-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function behaviors() {
		return array(
			'exportableGrid' => array(
			'class' => 'application.components.ExportableGridBehavior',
			'filename' => 'PostsWithUsers.csv',
			'csvDelimiter' => ',', //i.e. Excel friendly csv delimiter
		));
	}
}
