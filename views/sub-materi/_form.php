<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubMateri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">'Sub Materi'</h4>
    </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">

            <?= $form->field($model, 'idMateri')->textInput() ?>

            <?= $form->field($model, 'idKategori')->textInput() ?>


            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>


