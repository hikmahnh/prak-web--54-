<?php

namespace app\controllers;
use app\models\Mahasiswa054;
use yii\data\ActiveDataProvider;

class Mahasiswa054Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa054::find()
        ]);
        return $this -> render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
