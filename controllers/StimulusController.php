<?php

namespace app\controllers;
use app\models\Stimulus;
use yii\data\ActiveDataProvider;

class StimulusController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa118::find();
        $dataProvider = new actionDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    // public function actionIndex()
    // {
    //     $query = Stimulus::find();
    //     $dataProvider =  new ActiveDataProvider([
    //         'query' => $query
    //     ]);
    //     return $this->render('index', [
    //         'dataProvider' => $dataProvider
    //     ]);
    // }

    public function actionInsert()
    {
        $stimulus = new Stimulus;
        $stimulus->id = 1;
        $stimulus->kode_bagian = '11';
        $stimulus->teks = 'Akidatul Izza';
        $stimulus->catatan = 'Prak web 3';
        if ($stimulus->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($stimulus->getError());
        }
    }

    public function actionUpdate($id = '1')
    {
        $stimulus = Stimulus::findOne($id);
        $stimulus->catatan = 'Prak web 4';
        if ($stimulus->save()) {
            return $this->redirect(['index']);
        }
    }

    public function actionDelete($id)
    {
        $stimulus = Stimulus::findOne($id);
        if ($stimulus->delete()) {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $stimulus = Stimulus::findOne($id = '1');
        return $this->render('view', ['stimulus' => $stimulus]);
    }

}
