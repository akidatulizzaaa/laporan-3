<?php
namespace app\controllers;

use app\models\Profil118;
use yii\data\ActiveDataProvider;

class ProfilController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionIndex()
    {
        $query = Profil::find();
        $dataProvider =  new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    

}
