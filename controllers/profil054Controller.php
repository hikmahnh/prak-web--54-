<?php

namespace app\controllers;
use app\models\Profil054;
use yii\data\ActiveDataProvider;

class Profil054Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => profil054::find()
        ]);
        return $this -> render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
