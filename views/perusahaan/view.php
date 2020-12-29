<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Kbli;
use app\models\Kodepos;

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
            [
              'label'  => 'Kodepos',
              'value'  => Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one()->kodepos . ' - ' .
                          Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one()->kelurahan . ' - ' .
                          Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one()->kecamatan . ' - ' .
                          Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one()->kabupaten . ' - ' .
                          Kodepos::find()->where(['kodepos' => $model->KODEPOS])->one()->provinsi,
            ],
            'EMAIL:email',
            'TELEPON',
            'FAKS',
            'NPWP',
            'SITUS',
            'TANGGAL_AKTA',
            'USAHA_UTAMA',
            'SEKTOR',
            //'KODE_KBLI',
            [
              'label'  => 'Kode KBLI',
              'value'  => Kbli::find()->where(['kode' => $model->KODE_KBLI])->one()->kategori . ' - ' .
                          Kbli::find()->where(['kode' => $model->KODE_KBLI])->one()->kode . ' - ' .
                          Kbli::find()->where(['kode' => $model->KODE_KBLI])->one()->judul,
            ],
            'TANGGAL_REKAM',
        ],
    ]) ?>

</div>
