<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
class SiteController extends controller{
    public function behaviors()
    {
        return[
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    ['actions' => ['logout'],
                    'allow' => true,
                    'roles' => ['@'],
                    
                ],
                ],
            ],
            'verb' => [
                'class' => VerbFilter::class,
                'actions' =>[
                    'logout' => ['post']
                ],
                ],
            ]; 
    }
    public function actionIndex()
    {
        return $this->render('index');
    }
}
?>