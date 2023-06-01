<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUbahKrs($id)
    
    {
        return "<h>Ubah Krs</h>";
    }

}
