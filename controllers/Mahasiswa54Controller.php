<?php
namespace app\controllers;

use app\models\Mahasiswa54;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;


class Mahasiswa54Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa54::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa54 = new Mahasiswa54;
        $mahasiswa54->no_induk_mahasiswa = '60200121054-'.rand(10,99);
        $mahasiswa54->nama_mahasiswa = 'Nurul Hikmah';
        $mahasiswa54->kelas = 'A';
        $mahasiswa54->status = 'Baru';
        if ($mahasiswa54->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa54 = mahasiswa54::findOne(['id' => $id]);
        if($mahasiswa54 !== null){
            $mahasiswa54->kelas = 'C';
            $mahasiswa54->status = 'Update';
            $mahasiswa54->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa54 = mahasiswa54::findOne($id);
        if ($mahasiswa54->delete()) {
        return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa54->getError());
            die();
            }
        }
    
        public function actionView($id)
        {
            $mahasiswa54 = mahasiswa54::findOne($id);
            return $this->render('view', ['mahasiswa54' => $mahasiswa54]);
    }
}
    
    