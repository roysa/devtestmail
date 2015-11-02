<?php

class SiteController extends BaseController
{
    
    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionLogin()
    {
        
        $model = new LoginForm();
        if (Yii::app()->request->isPostRequest && isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate()) {
                $model->login();
            }
        }
        $this->layout = 'blank';
        $this->render('login', array('model' => $model));
    }
    
    public function logout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->getBaseUrl());
    }
    
}