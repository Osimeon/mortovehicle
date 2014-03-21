<?php

class DataEntryCostsController extends Controller
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
				'actions'=>array('index','view',),
				'roles' => array('reader'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'roles' => array('writer'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','create','approve'),
				'roles' => array('admin'),
			),
			array('deny',  // deny all users
				//'users'=>array('*'),
			),
		);
	}
	
	public function actionApprove($id){
		$model = $this -> loadModel($id);
		
		if(isset($_POST['DataEntryCosts'])){
			$model -> attributes = $_POST['DataEntryCosts'];
			$model -> approaved = 1;
			if($model->save())
				$history = new UserHistory;
				$history -> staff_number = Yii::app()->user->id;
				$history -> rec_type = 'logging';
				$history -> rec_number = $model->cost_rec_id;
				$history -> date_of_action = date('Y-m-d');
				$history -> action_type = 'APPROVED COST';
				$history -> save();		
				$this->redirect(array('view','id'=>$model->cost_rec_id));
		}
		$this->render('approve',array(
			'model'=>$model,
		));
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DataEntryCosts;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DataEntryCosts']))
		{
			$model->attributes=$_POST['DataEntryCosts'];
			$model->costyear = date('Y');
			$model->analysisperiod = 999;
			
			$model -> user_created = Yii::app()->user->id;
			$model -> date_created = date('Y-m-d');
			
			if($model->save())
				$history = new UserHistory;
				$history -> staff_number = Yii::app()->user->id;
				$history -> rec_type = 'mantainance';
				$history -> rec_number = $model->cost_rec_id;
				$history -> date_of_action = date('Y-m-d');
				$history -> action_type = 'CREATE';
				$history -> save();
				$this->redirect(array('view','id'=>$model->cost_rec_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DataEntryCosts']))
		{
			$model->attributes=$_POST['DataEntryCosts'];
			if($model->save())
				$history = new UserHistory;
				$history -> staff_number = Yii::app()->user->id;
				$history -> rec_type = 'mantainance';
				$history -> rec_number = $model->cost_rec_id;
				$history -> date_of_action = date('Y-m-d');
				$history -> action_type = 'UPDATE';
				$history -> save();
				$this->redirect(array('view','id'=>$model->cost_rec_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$history = new UserHistory;
			$history -> staff_number = Yii::app()->user->id;
			$history -> rec_type = 'mantainance';
			$history -> rec_number = $model->cost_rec_id;
			$history -> date_of_action = date('Y-m-d');
			$history -> action_type = 'DELETE';
			$history -> save();
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('DataEntryCosts');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DataEntryCosts('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DataEntryCosts']))
			$model->attributes=$_GET['DataEntryCosts'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=DataEntryCosts::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='data-entry-costs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
