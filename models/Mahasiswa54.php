<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa54".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mahasiswa54 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa54';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'kelas', 'status'], 'string', 'max' => 100],
            [['nama_mahasiswa'], 'string', 'max' => 125],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID54',
            'no_induk_mahasiswa' => 'No Induk Mahasiswa54',
            'nama_mahasiswa' => 'Nama Mahasiswa54',
            'kelas' => 'Kelas54',
            'status' => 'Status54',
        ];
    }
}
