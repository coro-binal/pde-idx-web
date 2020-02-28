<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Individu */

$this->title = 'Update Individu: ' . $model->NAMA;
$this->params['breadcrumbs'][] = ['label' => 'Individu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAMA, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="individu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
