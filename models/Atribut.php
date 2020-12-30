<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atribut".
 *
 * @property int $id
 * @property string $atribut
 * @property int|null $induk
 */
class Atribut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atribut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['atribut'], 'required'],
            [['induk'], 'integer'],
            [['atribut'], 'string', 'max' => 50],
            [['atribut'], 'unique'],
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
            'induk' => 'Induk',
        ];
    }
}
