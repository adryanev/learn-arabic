<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-form box box-primary">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'soal')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'gambar')->fileInput() ?>

        <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'b')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'c')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'd')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model,'jawaban')->dropDownList($model->getOptions())?>
    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
