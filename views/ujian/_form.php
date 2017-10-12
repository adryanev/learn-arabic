<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ujian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'idUser')->textInput() ?>

        <?= $form->field($model, 'tglUjian')->textInput() ?>

        <?= $form->field($model, 'totalSkor')->textInput() ?>

        <?= $form->field($model, 'idWaktu')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
