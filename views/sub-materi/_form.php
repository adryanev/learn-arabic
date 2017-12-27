<?php

use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubMateri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Sub Materi</h4>
    </div>
    <?php
    $materis = \app\models\Materi::find()->asArray()->all();
    $materiMap = \yii\helpers\ArrayHelper::map($materis,'idMateri','namaMateri');
    $kategoris = \app\models\Kategori::find()->asArray()->all();
    $kategoriMap = \yii\helpers\ArrayHelper::map($kategoris,'idKategori','namaKategori');

    ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">
            <?=
            $form->field($model,'idMateri')->widget(Select2::className(),[
                'model' => $model,
                'name' => 'idMateri',
                'data' => $materiMap,
                'options' => [
                    'placeholder' => 'Pilih Materi',
                ],
            ]);
            ?>
            <?=
            $form->field($model,'idKategori')->widget(Select2::className(),[
                'model' => $model,
                'name' => 'idKategori',
                'data' => $kategoriMap,
                'options' => [
                    'placeholder' => 'Pilih Kategori',
                ],
            ]);
            ?>


            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>


