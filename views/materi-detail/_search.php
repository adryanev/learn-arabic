<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMateriDetail') ?>

    <?= $form->field($model, 'idMateri') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'gambar') ?>

    <?= $form->field($model, 'terjemahan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
