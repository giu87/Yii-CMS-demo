<?php

class SpeciesController extends Controller
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
				'actions'=>array('index','view'),
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
		$model=new Species;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Species']))
		{
                        $rnd = rand(0,99999);
			$model->attributes=$_POST['Species'];
                        
                        // Photo
                        $uploadedFilePhoto=CUploadedFile::getInstance($model,'photo');
                        $fileNamePhoto = "{$rnd}-{$uploadedFilePhoto}";
                        if(!empty($uploadedFilePhoto))
                            $model->photo = $fileNamePhoto;
                        
                        // curiosityImg1
                        $uploadedFileCuriosityImg1=CUploadedFile::getInstance($model,'curiosityImg1');
                        $fileNameCuriosityImg1 = "{$rnd}-{$uploadedFileCuriosityImg1}";
                        if(!empty($uploadedFileCuriosityImg1))
                            $model->curiosityImg1 = $fileNameCuriosityImg1;

                        // curiosityImg2
                        $uploadedFileCuriosityImg2=CUploadedFile::getInstance($model,'curiosityImg2');
                        $fileNameCuriosityImg2 = "{$rnd}-{$uploadedFileCuriosityImg2}";
                        if(!empty($uploadedFileCuriosityImg2))
                            $model->curiosityImg2 = $fileNameCuriosityImg2;

                        // morphologyPhoto
                        $uploadedFileMorphologyPhoto=CUploadedFile::getInstance($model,'morphologyPhoto');
                        $fileNameMorphologyPhoto = "{$rnd}-{$uploadedFileMorphologyPhoto}";
                        if(!empty($uploadedFileMorphologyPhoto))
                            $model->morphologyPhoto = $fileNameMorphologyPhoto;
                        
                        // morphologyReminderPhoto1
                        $uploadedFileMorphologyReminderPhoto1=CUploadedFile::getInstance($model,'morphologyReminderPhoto1');
                        $fileNameMorphologyReminderPhoto1 = "{$rnd}-{$uploadedFileMorphologyReminderPhoto1}";
                        if(!empty($uploadedFileMorphologyReminderPhoto1))
                            $model->morphologyReminderPhoto1 = $fileNameMorphologyReminderPhoto1;

                        // morphologyReminderPhoto1
                        $uploadedFileMorphologyReminderPhoto2=CUploadedFile::getInstance($model,'morphologyReminderPhoto2');
                        $fileNameMorphologyReminderPhoto2 = "{$rnd}-{$uploadedFileMorphologyReminderPhoto2}";
                        if(!empty($uploadedFileMorphologyReminderPhoto2))
                            $model->morphologyReminderPhoto2 = $fileNameMorphologyReminderPhoto2;

                        // morphologyReminderPhoto1
                        $uploadedFileMorphologyReminderPhoto3=CUploadedFile::getInstance($model,'morphologyReminderPhoto3');
                        $fileNameMorphologyReminderPhoto3 = "{$rnd}-{$uploadedFileMorphologyReminderPhoto3}";
                        if(!empty($uploadedFileMorphologyReminderPhoto3))
                            $model->morphologyReminderPhoto3 = $fileNameMorphologyReminderPhoto3;

                        // morphologyReminderPhoto1
                        $uploadedFileMorphologyReminderPhoto4=CUploadedFile::getInstance($model,'morphologyReminderPhoto4');
                        $fileNameMorphologyReminderPhoto4 = "{$rnd}-{$uploadedFileMorphologyReminderPhoto4}";
                        if(!empty($uploadedFileMorphologyReminderPhoto4))
                            $model->morphologyReminderPhoto4 = $fileNameMorphologyReminderPhoto4;
                        
                        // distributionPhoto
                        $uploadedFileDistributionPhoto=CUploadedFile::getInstance($model,'distributionPhoto');
                        $fileNameDistributionPhoto = "{$rnd}-{$uploadedFileDistributionPhoto}";
                        if(!empty($uploadedFileDistributionPhoto))
                            $model->distributionPhoto = $fileNameDistributionPhoto;
                        
			if($model->save()){
                            
                            if(!empty($uploadedFilePhoto))
                                $uploadedFilePhoto->saveAs(Yii::app()->basePath.'/../images/index/'.$fileNamePhoto);
                             if(!empty($uploadedFileCuriosityImg1))
                               $uploadedFileCuriosityImg1->saveAs(Yii::app()->basePath.'/../images/curiosity/'.$fileNameCuriosityImg1);
                             if(!empty($uploadedFileCuriosityImg2))
                               $uploadedFileCuriosityImg2->saveAs(Yii::app()->basePath.'/../images/curiosity/'.$fileNameCuriosityImg2);
                             if(!empty($uploadedFileMorphologyPhoto))
                               $uploadedFileMorphologyPhoto->saveAs(Yii::app()->basePath.'/../images/morphology/'.$fileNameMorphologyPhoto);
                             if(!empty($uploadedFileMorphologyReminderPhoto1))
                               $uploadedFileMorphologyReminderPhoto1->saveAs(Yii::app()->basePath.'/../images/morphology/'.$fileNameMorphologyReminderPhoto1);
                             if(!empty($uploadedFileMorphologyReminderPhoto2))
                               $uploadedFileMorphologyReminderPhoto2->saveAs(Yii::app()->basePath.'/../images/morphology/'.$fileNameMorphologyReminderPhoto2);
                             if(!empty($uploadedFileMorphologyReminderPhoto3))
                               $uploadedFileMorphologyReminderPhoto3->saveAs(Yii::app()->basePath.'/../images/morphology/'.$fileNameMorphologyReminderPhoto3);
                             if(!empty($uploadedFileMorphologyReminderPhoto4))
                               $uploadedFileMorphologyReminderPhoto4->saveAs(Yii::app()->basePath.'/../images/morphology/'.$fileNameMorphologyReminderPhoto4);
                             if(!empty($uploadedFileDistributionPhoto))
                               $uploadedFileDistributionPhoto->saveAs(Yii::app()->basePath.'/../images/distribution/'.$fileNameDistributionPhoto);
                                
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Species']))
		{
                    
                        $rnd = rand(0,99999);                                                
                        $model->attributes=$_POST['Species'];
                        
                        $uploadedFilePhoto=CUploadedFile::getInstance($model,'photo');
                        if(!empty($uploadedFilePhoto) && empty($model->photo))
                            $model->photo="{$rnd}-{$uploadedFilePhoto}";

                        $uploadedFileCuriosityImg1=CUploadedFile::getInstance($model,'curiosityImg1');
                        if(!empty($uploadedFileCuriosityImg1) && empty($model->curiosityImg1))
                            $model->curiosityImg1="{$rnd}-{$uploadedFileCuriosityImg1}";

                        $uploadedFileCuriosityImg2=CUploadedFile::getInstance($model,'curiosityImg2');
                        if(!empty($uploadedFileCuriosityImg2) && empty($model->curiosityImg2))
                            $model->curiosityImg2="{$rnd}-{$uploadedFileCuriosityImg2}";

                        $uploadedFileMorphologyPhoto=CUploadedFile::getInstance($model,'morphologyPhoto');
                        if(!empty($uploadedFileMorphologyPhoto) && empty($model->morphologyPhoto))
                            $model->morphologyPhoto="{$rnd}-{$uploadedFileMorphologyPhoto}";

                        $uploadedFileMorphologyReminderPhoto1=CUploadedFile::getInstance($model,'morphologyReminderPhoto1');
                        if(!empty($uploadedFileMorphologyReminderPhoto1) && empty($model->morphologyReminderPhoto1))
                            $model->morphologyReminderPhoto1="{$rnd}-{$uploadedFileMorphologyReminderPhoto1}";

                        $uploadedFileMorphologyReminderPhoto2=CUploadedFile::getInstance($model,'morphologyReminderPhoto2');
                        if(!empty($uploadedFileMorphologyReminderPhoto2) && empty($model->morphologyReminderPhoto2))
                            $model->morphologyReminderPhoto2="{$rnd}-{$uploadedFileMorphologyReminderPhoto2}";

                        $uploadedFileMorphologyReminderPhoto3=CUploadedFile::getInstance($model,'morphologyReminderPhoto3');
                        if(!empty($uploadedFileMorphologyReminderPhoto3) && empty($model->morphologyReminderPhoto3))
                            $model->morphologyReminderPhoto3="{$rnd}-{$uploadedFileMorphologyReminderPhoto3}";

                        $uploadedFileMorphologyReminderPhoto4=CUploadedFile::getInstance($model,'morphologyReminderPhoto4');
                        if(!empty($uploadedFileMorphologyReminderPhoto4) && empty($model->morphologyReminderPhoto4))
                            $model->morphologyReminderPhoto4="{$rnd}-{$uploadedFileMorphologyReminderPhoto4}";

                        $uploadedFileDistributionPhoto=CUploadedFile::getInstance($model,'distributionPhoto');
                        if(!empty($uploadedFileDistributionPhoto) && empty($model->distributionPhoto))
                            $model->distributionPhoto="{$rnd}-{$uploadedFileDistributionPhoto}";

			if($model->save()){
                            
                            if(!empty($uploadedFilePhoto))  
                                $uploadedFilePhoto->saveAs(Yii::app()->basePath.'/../images/index/'.$model->photo);

                            if(!empty($uploadedFileCuriosityImg1))  
                                $uploadedFileCuriosityImg1->saveAs(Yii::app()->basePath.'/../images/curiosity/'.$model->curiosityImg1);

                            if(!empty($uploadedFileCuriosityImg2))  
                                $uploadedFileCuriosityImg2->saveAs(Yii::app()->basePath.'/../images/curiosity/'.$model->curiosityImg2);

                            if(!empty($uploadedFileMorphologyPhoto))  
                                $uploadedFileMorphologyPhoto->saveAs(Yii::app()->basePath.'/../images/morphology/'.$model->morphologyPhoto);

                            if(!empty($uploadedFileMorphologyReminderPhoto1))  
                                $uploadedFileMorphologyReminderPhoto1->saveAs(Yii::app()->basePath.'/../images/morphology/'.$model->morphologyReminderPhoto1);

                            if (!empty($uploadedFileMorphologyReminderPhoto1))
                                $uploadedFileMorphologyReminderPhoto1->saveAs(Yii::app()->basePath . '/../images/morphology/' . $model->morphologyReminderPhoto1);

                            if (!empty($uploadedFileMorphologyReminderPhoto2))
                                $uploadedFileMorphologyReminderPhoto2->saveAs(Yii::app()->basePath . '/../images/morphology/' . $model->morphologyReminderPhoto2);

                            if (!empty($uploadedFileMorphologyReminderPhoto3))
                                $uploadedFileMorphologyReminderPhoto3->saveAs(Yii::app()->basePath . '/../images/morphology/' . $model->morphologyReminderPhoto3);

                            if (!empty($uploadedFileMorphologyReminderPhoto4))
                                $uploadedFileMorphologyReminderPhoto4->saveAs(Yii::app()->basePath . '/../images/morphology/' . $model->morphologyReminderPhoto4);

                           if (!empty($uploadedFileDistributionPhoto))
                                $uploadedFileDistributionPhoto->saveAs(Yii::app()->basePath . '/../images/morphology/' . $model->distributionPhoto);

                            $this->redirect(array('view','id'=>$model->id));
                        }
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
		$dataProvider=new CActiveDataProvider('Species');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Species('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Species']))
			$model->attributes=$_GET['Species'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Species the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Species::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Species $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='species-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
