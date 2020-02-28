<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perusahaan".
 *
 * @property int $ID
 * @property string $NAMA
 * @property string|null $IDX_KODE
 * @property string $ALAMAT
 * @property string|null $EMAIL
 * @property string|null $TELEPON
 * @property string|null $FAKS
 * @property string|null $NPWP
 * @property string|null $SITUS
 * @property string|null $TANGGAL_AKTA
 * @property string|null $USAHA_UTAMA
 * @property string|null $SEKTOR
 * @property string|null $KODE_KBLI
 * @property string $TANGGAL_REKAM
 */
class Perusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMA', 'ALAMAT'], 'required'],
            [['TANGGAL_AKTA', 'TANGGAL_REKAM'], 'safe'],
            [['NAMA'], 'string', 'max' => 200],
            [['IDX_KODE'], 'string', 'max' => 4],
            [['ALAMAT', 'USAHA_UTAMA', 'SEKTOR'], 'string', 'max' => 250],
            [['EMAIL', 'TELEPON', 'FAKS'], 'string', 'max' => 50],
            [['NPWP'], 'string', 'max' => 20],
            [['SITUS'], 'string', 'max' => 100],
            [['KODE_KBLI'], 'string', 'max' => 5],
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
            'IDX_KODE' => 'Idx Kode',
            'ALAMAT' => 'Alamat',
            'EMAIL' => 'Email',
            'TELEPON' => 'Telepon',
            'FAKS' => 'Faks',
            'NPWP' => 'Npwp',
            'SITUS' => 'Situs',
            'TANGGAL_AKTA' => 'Tanggal Akta',
            'USAHA_UTAMA' => 'Usaha Utama',
            'SEKTOR' => 'Sektor',
            'KODE_KBLI' => 'Kode Kbli',
            'TANGGAL_REKAM' => 'Tanggal Rekam',
        ];
    }
}
