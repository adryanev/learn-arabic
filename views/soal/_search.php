<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SoalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSoal') ?>

    <?= $form->field($model, 'soal') ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?= $form->field($model, 'c') ?>

    <?php // echo $form->field($model, 'd') ?>

    <?php // echo $form->field($model, 'jawaban') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
