<?php
	class DataEntryController extends Controller{
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
					'actions'=>array('index','view'),
					'roles' => array('reader'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('create','update','admin','delete'),
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
		 * Lists all models.
		 */
		public function actionIndex(){
			$dataProvider = new CActiveDataProvider('Mortoanalysisdefinition', array(
				'sort' => array(
                	'defaultOrder' => 'analysisperiod ASC',
                 ),
			));
			$this->render('index', array('dataProvider'=>$dataProvider,));
		}
		
		public function actionAdmin(){
			$allAnalysis = new CActiveDataProvider('MortocycleAnalysisRecords',array(
					'pagination' => array(
					'pageSize' => 10,
				 ),
			));
			$this->render('report', array(
            	'allAnalysis' => $allAnalysis,
        	));
		}
	}
?>