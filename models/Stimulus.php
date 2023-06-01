<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stimulus".
 *
 * @property int $id
 * @property string $kode_bagian
 * @property string $teks
 * @property string $catatan
 */
class Stimulus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stimulus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_bagian', 'teks', 'catatan'], 'required'],
            [['kode_bagian', 'teks', 'catatan'], 'string', 'max' => 255],
            [['kode_bagian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_bagian' => 'Kode Bagian',
            'teks' => 'Teks',
            'catatan' => 'Catatan',
        ];
    }
}
