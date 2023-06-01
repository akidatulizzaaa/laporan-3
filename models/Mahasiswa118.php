<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa118".
 *
 * @property int $id118
 * @property string $no_induk_mahasiswa118
 * @property string $nama_mahasiswa118
 * @property string $kelas118
 * @property string $status118
 */
class Mahasiswa118 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa118';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa118', 'nama_mahasiswa118', 'kelas118', 'status118'], 'required'],
            [['no_induk_mahasiswa118'], 'string', 'max' => 15],
            [['nama_mahasiswa118'], 'string', 'max' => 100],
            [['kelas118'], 'string', 'max' => 1],
            [['status118'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id118' => 'Id118',
            'no_induk_mahasiswa118' => 'No Induk Mahasiswa118',
            'nama_mahasiswa118' => 'Nama Mahasiswa118',
            'kelas118' => 'Kelas118',
            'status118' => 'Status118',
        ];
    }
}
