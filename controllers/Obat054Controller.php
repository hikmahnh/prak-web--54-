<?php

namespace app\controllers;

use app\models\Obat054;
use yii\data\ActiveDataProvider;

class Obat054Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat054::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
