<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Individu;
use app\models\Perusahaan;
use app\models\Atribut;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hubungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hubungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'atribut',
            [
              'label'  => 'Atribut',
              'value'  => function($model) { return Atribut::findOne($model->atribut)->atribut; }
            ],
            //'individu',
            [
              'label'  => 'Individu',
              'value'  => function($model) {
                $individu_text = ($model->individu) ? Individu::findOne($model->individu)->NAMA : NULL;
                return $individu_text;
              }
            ],
            //'perusahaan',
            [
              'label'  => 'Perusahaan',
              'value'  => function($model) {
                $perusahaan_text = ($model->perusahaan) ? Perusahaan::findOne($model->perusahaan)->NAMA : NULL;
                return $perusahaan_text;
              }
            ],
            'teks:ntext',
            'nominal',
            //'link_sumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
