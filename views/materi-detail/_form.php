<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-detail-form box box-primary">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'idMateri')->textInput() ?>

        <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'imageFile')->fileInput() ?>

        <?= $form->field($model, 'terjemahan')->textarea(['rows' => 6]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
