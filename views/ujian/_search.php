<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UjianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idUjian') ?>

    <?= $form->field($model, 'idUser') ?>

    <?= $form->field($model, 'tglUjian') ?>

    <?= $form->field($model, 'totalSkor') ?>

    <?= $form->field($model, 'idWaktu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
