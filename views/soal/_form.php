<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Soal</h4>
    </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">

                    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'soal')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'b')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'c')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'd')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jawaban')->dropDownList([ 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', ], ['prompt' => '']) ?>

        <?= $form->field($model, 'timestamp')->textInput() ?>

        </div>
        <div class="box-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
