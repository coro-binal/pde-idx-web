<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\selectize\SelectizeDropDownList;

use app\models\Individu;
use app\models\Perusahaan;
use app\models\Atribut;
$individu = ArrayHelper::map(Individu::find()->orderBy('nama')->all(), 'ID', 'NAMA');
$perusahaan = isset($perusahaan) ?
                array($perusahaan => Perusahaan::findOne($perusahaan)->NAMA) :
                ArrayHelper::map(Perusahaan::find()->orderBy('nama')->all(), 'ID', 'NAMA');
$atribut = ArrayHelper::map(Atribut::find()->orderBy('induk, atribut')->all(), 'id', 'atribut');

/* @var $this yii\web\View */
/* @var $model app\models\Hubungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'atribut')->widget(SelectizeDropDownList::className(), ['items' => $atribut]) ?>

    <?= $form->field($model, 'individu')->widget(SelectizeDropDownList::className(), ['items' => $individu]) ?>

    <?= $form->field($model, 'perusahaan')->widget(SelectizeDropDownList::className(), ['items' => $perusahaan]) ?>

    <?= $form->field($model, 'teks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'link_sumber')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
