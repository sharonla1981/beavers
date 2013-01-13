<?php

class BeaverController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/lefty';

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
				'actions'=>array('index','view','captcha','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actions() {
		return array(
				'captcha' => array(
					'class' => 'CCaptchaAction',
					'backColor' => 0xFFFFFF,
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
	 * Creates a new model.
	 * This perform the new Beaver = User(YumUser) & Project
	 */
	public function actionCreate()
	{
		//init the models for the _form view
                $beaver=new Beaver;
                /*  the YumUser Model have 2 models -> $userForm = basic user fields
                 *  $profile = extra fields 
                 */
                $userForm = new YumRegistrationForm;
                $profile = new YumProfile;
                $project = new Project;
                
                //facebook data
                $facebook = new Facebook(array(
                   'appId'=>'485995968109492',
                   'secret'=>'a52864946a84b8392291adb3be2999bd'
                ));
                                          
                
                //the YumRegistrationController has the registration functionality needed
                $registration = new YumRegistrationController('YumRegistrationController');
                
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($beaver,$project,$profile,$userForm));

                
		if(isset($_POST['YumRegistrationForm']) && isset($_POST['Project']) ||
                            (isset($_POST['Project'])))
                               
		{
                        $userProfile = $facebook->getUser();
                        $project->attributes=$_POST['Project'];
                        if ($userProfile){
                        try {
                            $fbme = $facebook->api('/me');
                            $userForm->setAttribute('username', $fbme['id']);
                            $userForm->setAttribute('password', md5($fbme['id']));
                            $profile->setAttribute('email', $fbme['email']);
                            $profile->setAttribute('facebook_id', $fbme['id']);
                            $profile->setAttribute('firstname', $fbme['first_name']);
                            $profile->setAttribute('lastname', $fbme['last_name']);
                            
                            $user = new YumUser;
                            $user->facebookRegister($fbme['first_name'].$fbme['id'],$fbme['last_name'].$fbme['id']);
                            $profile->user_id = $user->id;
                            $profile->save();
                        
                            } catch (FacebookApiException $e){
                                error_log($e);
                            }
                        }
                        
                        else 
                        {
                            $userForm->attributes = $_POST['YumRegistrationForm'];
                            $profile->attributes = $_POST['YumProfile'];
                        
                                                
                            if(!$userForm->hasErrors() && !$profile->hasErrors())
                            {
                                //User (User + Profile)
                                $user = new YumUser;
                                $user->register($userForm->username,$userForm->password,$profile->email);
                                $profile->user_id = $user->id;
                                $profile->save();
                            }
                        }
                            //Project
                            $project->create_time =  date('Y-m-d H:i:s', time());
                            $project->update_time = date('Y-m-d H:i:s', time());
                            $project->create_user_id = $user->id;
                            $project->update_user_id = 0;
                            if (!$project->hasErrors()) 
                                { 
                                    $project->save();    
                                }
                            
                            
                            //Beaver
                            $beaver->create_time =  date('Y-m-d H:i:s', time());
                            $beaver->update_time = date('Y-m-d H:i:s', time());
                            $beaver->create_user_id = $user->id;
                            $beaver->update_user_id = 0;
                            $beaver->project_id = $project->project_id;
                            $beaver->user_id = $user->id;
                            if (!$beaver->hasErrors()) 
                                { 
                                    $beaver->save();
                                }
                            
                            //send mail
                            $registration->sendRegistrationEmail($user);
                            Yum::setFlash('Thank you for your registration. Please check your email.');
                            $this->redirect('/beavers/index.php/user/login');
                }
                        
                        
		

		$this->render('create',array(
			'model'=>$beaver,'userForm'=>$userForm,'project'=>$project,'profile'=>$profile
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

		if(isset($_POST['Beaver']))
		{
			$model->attributes=$_POST['Beaver'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->beaver_id));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Beaver');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Beaver('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Beaver']))
			$model->attributes=$_GET['Beaver'];

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
		$model=Beaver::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='beaver-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
