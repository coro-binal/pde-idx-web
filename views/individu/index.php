<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Individu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="individu-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?php
if(!Yii::$app->user->isGuest) {
?>
    <p>
        <?= Html::a('Tambah Individu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
}
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'NAMA',
            'ALAMAT',
            'EMAIL:email',
            'TELEPON',
            //'HP',
            //'FAKS',
            'SITUS',
            //'TANGGAL_LAHIR',
            //'TEMPAT_LAHIR',
            //'TANGGAL_UPDATE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
