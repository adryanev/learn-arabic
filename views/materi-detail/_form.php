<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;
use kartik\file\FileInput;


/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$initalpreview = Html::img('/upload/images'.$model->gambar, ['class'=>'file-preview-image']);
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Materi Detail</h4>
    </div>
        <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
        <div class="card-content table-responsive">

            <?= $form->field($model, 'idSubMateri')->textInput() ?>

        <?= $form->field($model, 'isi')->widget(Redactor::className(),[
                'settings' => [
                    'lang' => 'id',
                    'minHeight'=>'200',
                    'plugins'=>[
                        'clips',
                        'fullscreen',
                    ]
                ]
            ]) ?>
        <?= $form->field($model, 'gambar')->widget(FileInput::className(),[
                'options'=>['accept'=>'image/*']
            ]) ?>

        <?= $form->field($model, 'terjemahan')->widget(Redactor::className(),
                [
                    'settings' => [
                        'lang' => 'id',
                        'minHeight'=>'200',
                        'plugins'=>[
                            'clips',
                            'fullscreen',
                        ]
                    ]
                ]) ?>

            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
