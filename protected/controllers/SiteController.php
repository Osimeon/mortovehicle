<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$morotdetails = new CActiveDataProvider('AllAggregate',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		
		$vehicledetails = new CActiveDataProvider('VehicleAggregate',array(
        		'pagination' => array(
            	'pageSize' => 10,
             ),
		));
		
		$this->render('index', array(
			'morotdetails'=> $morotdetails,
			'vehicledetails' => $vehicledetails,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin(){
            $form = new LoginForm;
            // collect user input data
            if(isset($_POST['LoginForm'])){
                $form -> attributes = $_POST['LoginForm'];
                // validate user input and redirect to previous page if valid
                if($form->validate()) $this -> redirect(Yii::app()->user->returnUrl);
            }
            // display the login form
            $this->render('login',array('form' => $form));
        }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout(){
        $assigned_roles = Yii::app()->authManager->getRoles(Yii::app()->user->id); //obtains all assigned roles for this user id
        if(!empty($assigned_roles)){//checks that there are assigned roles
            $auth=Yii::app()->authManager; //initializes the authManager
            foreach($assigned_roles as $n => $role){
                if($auth->revoke($n,Yii::app()->user->id)) //remove each assigned role for this user
                    Yii::app()->authManager->save(); //again always save the result
            }
        }

        Yii::app()->user->logout(); //logout the user
        $this->redirect(Yii::app()->homeUrl); //redirect the user
    }
      
}