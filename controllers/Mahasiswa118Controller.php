<?php

namespace app\controllers;

use app\models\Mahasiswa118;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa118Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa118::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa118 = new Mahasiswa118;
        $mahasiswa118->no_induk_mahasiswa118 = '60200121118-'.rand(100,999);
        $mahasiswa118->nama_mahasiswa118 = 'Akidatul Izza';
        $mahasiswa118->kelas118 = 'D';
        $mahasiswa118->status118 = 'Baru';
        if ($mahasiswa118->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa118 = mahasiswa118::findOne($id);
        if ($mahasiswa118 !== null) {
            $mahasiswa118->kelas118 = 'C';
            $mahasiswa118->status118 = 'Update';
            $mahasiswa118->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa118 = mahasiswa118::findOne($id);
        if ($mahasiswa118->delete()) {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mahasiswa118 = mahasiswa118::findOne($id);
        return $this->render('view', ['mahasiswa118' => $mahasiswa118]);
    }
}