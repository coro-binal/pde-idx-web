<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "individu".
 *
 * @property int $ID
 * @property string $NAMA
 * @property string|null $ALAMAT
 * @property string|null $EMAIL
 * @property string|null $TELEPON
 * @property string|null $HP
 * @property string|null $FAKS
 * @property string|null $SITUS
 * @property string|null $TANGGAL_LAHIR
 * @property string|null $TEMPAT_LAHIR
 * @property string $TANGGAL_UPDATE
 */
class Individu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'individu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMA'], 'required'],
            [['TANGGAL_LAHIR', 'TANGGAL_UPDATE'], 'safe'],
            [['NAMA'], 'string', 'max' => 200],
            [['ALAMAT'], 'string', 'max' => 250],
            [['EMAIL', 'SITUS', 'TEMPAT_LAHIR'], 'string', 'max' => 100],
            [['TELEPON', 'HP', 'FAKS'], 'string', 'max' => 50],
            [['NAMA'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NAMA' => 'Nama',
            'ALAMAT' => 'Alamat',
            'EMAIL' => 'Email',
            'TELEPON' => 'Telepon',
            'HP' => 'Hp',
            'FAKS' => 'Faks',
            'SITUS' => 'Situs',
            'TANGGAL_LAHIR' => 'Tanggal Lahir',
            'TEMPAT_LAHIR' => 'Tempat Lahir',
            'TANGGAL_UPDATE' => 'Tanggal Update',
        ];
    }
}
