<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kodepos".
 *
 * @property int $id
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $provinsi
 * @property string $kodepos
 */
class Kodepos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kodepos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'kodepos'], 'required'],
            [['kelurahan', 'kecamatan', 'kabupaten', 'provinsi'], 'string', 'max' => 100],
            [['kodepos'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'provinsi' => 'Provinsi',
            'kodepos' => 'Kodepos',
        ];
    }
}
