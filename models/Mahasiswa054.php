<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa054".
 *
 * @property int $Id
 * @property int $NIM
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 */
class Mahasiswa054 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa054';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIM', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['NIM'], 'integer'],
            [['Nama'], 'string', 'max' => 25],
            [['Kelas'], 'string', 'max' => 5],
            [['Jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'NIM' => 'Nim',
            'Nama' => 'Nama',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
            'profil054.foto_profil' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Profil054]].
     * 
     * @return \yii\db\ActiveQuery
     */
    public function getProfil054()
    {
        return $this->hasOne(Profil054::class, ['Id' => 'Id']);
    }
//     public function getProfil054()
//     {
//         //same as above
//         return $this->hasOne(Profil054::class, ['id'=> 'id']);
//     }
}
