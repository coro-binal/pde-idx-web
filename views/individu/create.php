<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Individu */

$this->title = 'Tambah Individu';
$this->params['breadcrumbs'][] = ['label' => 'Individu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="individu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
