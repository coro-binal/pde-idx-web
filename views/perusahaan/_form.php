<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\selectize\SelectizeDropDownList;
use app\models\Kbli;
use app\models\Kodepos;

$kbli = ArrayHelper::map(Kbli::find()->orderBy('kode')->all(), 'kode', 'judul');
$kodepos = ArrayHelper::map(Kodepos::find()->orderBy('id')->all(), 'kodepos', 'kodepos');

/* @var $this yii\web\View */
/* @var $model app\models\Perusahaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perusahaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDX_KODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEPOS')->widget(\dosamigos\selectize\SelectizeDropDownList::className(), ['items' => $kodepos]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEPON')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAKS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SITUS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TANGGAL_AKTA')->textInput() ?>

    <?= $form->field($model, 'USAHA_UTAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEKTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODE_KBLI')->widget(\dosamigos\selectize\SelectizeDropDownList::className(), ['items' => $kbli]) ?>

    <?= $form->field($model, 'TANGGAL_REKAM')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
