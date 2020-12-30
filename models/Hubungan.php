<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hubungan".
 *
 * @property int $id
 * @property int $atribut
 * @property int|null $individu
 * @property int|null $perusahaan
 * @property string $teks
 * @property float|null $nominal
 * @property string|null $link_sumber
 */
class Hubungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hubungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['atribut', 'teks'], 'required'],
            [['atribut', 'individu', 'perusahaan'], 'integer'],
            [['teks'], 'string'],
            [['nominal'], 'number'],
            [['link_sumber'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'atribut' => 'Atribut',
            'individu' => 'Individu',
            'perusahaan' => 'Perusahaan',
            'teks' => 'Teks',
            'nominal' => 'Nominal',
            'link_sumber' => 'Link Sumber',
        ];
    }
}
