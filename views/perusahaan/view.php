<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

use app\models\Kbli;
use app\models\Kodepos;
use app\models\Hubungan;
use app\models\Atribut;
use app\models\Individu;

$kodepos = Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one();
$kodepos_text = ($kodepos) ? $kodepos->kodepos . " - " . $kodepos->kelurahan . " - " .
                             $kodepos->kecamatan . " - " . $kodepos->kabupaten . " - " .
                             $kodepos->provinsi : NULL;
$kbli = Kbli::find()->where(['kode' => $model->KODE_KBLI])->one();
$kbli_text = ($kbli) ? $kbli->kategori . " . " . $kbli->kode . " . " . $kbli->judul : NULL;

$dataProvider = new ActiveDataProvider([
    'query' => Hubungan::find()->where(['perusahaan' => $model->ID])->orderBy('atribut, individu'),
]);

/* @var $this yii\web\View */
/* @var $model app\models\Perusahaan */

$this->title = $model->NAMA;
$this->params['breadcrumbs'][] = ['label' => 'Perusahaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perusahaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if(!Yii::$app->user->isGuest) {
    ?>
         <p>
           <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
           <?= Html::a('Tambah Atribut', ['hubungan/create', 'perusahaan' => $model->ID], ['class' => 'btn btn-primary']) ?>
         </p>
    <?php
    }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'NAMA',
            'IDX_KODE',
            'ALAMAT',
            //'KODEPOS',
            [ 'label'  => 'Kodepos', 'value'  => $kodepos_text],
            'EMAIL:email',
            'TELEPON',
            'FAKS',
            'NPWP',
            'SITUS',
            'TANGGAL_AKTA',
            'USAHA_UTAMA',
            'SEKTOR',
            //'KODE_KBLI',
            [ 'label'  => 'Kode KBLI', 'value'  => $kbli_text],
            'TANGGAL_REKAM',
        ],
    ]) ?>

    <?= GridView::widget([
          'dataProvider' => $dataProvider,
          'columns' => [
              //['class' => 'yii\grid\SerialColumn'],
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
                'teks:ntext',
                'nominal',
                //'link_sumber',

                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
</div>
