<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kbli".
 *
 * @property int $id
 * @property string $kategori
 * @property string $kode
 * @property string $judul
 * @property string $deskripsi
 */
class Kbli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kbli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori', 'kode', 'judul', 'deskripsi'], 'required'],
            [['judul', 'deskripsi'], 'string'],
            [['kategori'], 'string', 'max' => 2],
            [['kode'], 'string', 'max' => 6],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori' => 'Kategori',
            'kode' => 'Kode',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
