<?php

use yii\helpers\Html;

$perusahaan = ($_GET['perusahaan']) ? $_GET['perusahaan'] : NULL;
/* @var $this yii\web\View */
/* @var $model app\models\Hubungan */

$this->title = 'Tambah Hubungan';
$this->params['breadcrumbs'][] = ['label' => 'Attribut', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hubungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'perusahaan' => $perusahaan
    ]) ?>

</div>
