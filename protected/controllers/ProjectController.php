<?php

class ProjectController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/lefty';

         /**
         * @var private property which holds a user instance
         */
        
        private $_user = null;


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
                        'userContext + create,update',
		);
	}
        
        
        public function filterUserContext($filterChain)
        {
            $userId = null;
            if(isset(Yii::app()->user->id))
            {
                $userId = Yii::app()->user->id;
                
            }
            $this->loadUser($userId);
            $filterChain->run();
        }
        
        protected function loadUser($user_id)
        {
            if ($this->_user===null)
            {
                $this->_user= YumUser::model()->findByPk($user_id);
                if ($this->_user===null)
                {
                    throw new CHttpException(404,'The requested user does not exsit.');
                }
            }
            
            return $this->_user;
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
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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
		$model=new Project;
          
		if(isset($_POST['Project']))
		{
			$model->attributes=$_POST['Project'];
			$model->create_time =  date('Y-m-d H:i:s', time());
                        $model->update_time = date('Y-m-d H:i:s', time());
                        $model->create_user_id = Yii::app()->user->user_id;
                        $model->update_user_id = 0;
                        if($model->save())
                        {
                            $beaverArr = array('project_id'=>$model->getPrimaryKey(),'user_id'=>Yii::app()->user->user_id,'create_time'=>date('Y-m-d H:i:s', time()),'update_time'=>date('Y-m-d H:i:s', time()),
                            'create_user_id'=>Yii::app()->user->user_id,'update_user_id'=>Yii::app()->user->user_id);
                            $model->beavers = $beaverArr;
                            $beaver = new Beaver();
                            $beaver->attributes = $beaverArr;
                            if ($beaver->save())
                            {
                                Yii::app()->user->setState('project_id',$model->getPrimaryKey());
                                $this->redirect(array('view','id'=>$model->project_id));
                            }
                            else
                            {
                                $model->deleteByPk($model->getPrimaryKey());
                            }
                            
                        }
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

		if(isset($_POST['Project']))
		{
			$model->attributes=$_POST['Project'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->project_id));
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
                $criteria = new CDbCriteria;
                $criteria->with = array('beavers');
                
		$dataProvider=new CActiveDataProvider('Project',
                        array('criteria'=>$criteria));
                $data = $dataProvider->getData();
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Project('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Project']))
			$model->attributes=$_GET['Project'];

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
		$model=Project::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='project-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
