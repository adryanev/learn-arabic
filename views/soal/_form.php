<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Soal</h4>
    </div>
        <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
        <div class="card-content table-responsive">

            <?= $form->field($model, 'gambar')->widget(FileInput::className(),[
                'options'=>['accept'=>'image/*'],
            ]) ?>
            <?= $form->field($model, 'soal')->widget(Redactor::className(),[
                'settings' => [
                    'lang' => 'id',
                    'minHeight'=>'200',
                    'plugins'=>[
                        'clips',
                        'fullscreen',
                    ]
                ]
            ]) ?>
        <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'b')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'c')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'd')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jawaban')->dropDownList([ 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', ], ['prompt' => '']) ?>

            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>

        </div>


        <?php ActiveForm::end(); ?>
    </div>

