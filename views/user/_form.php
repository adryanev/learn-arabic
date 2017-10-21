<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit User</h4>
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-content table-responsive">

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tanggalLahir')->textInput() ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat col-md-12']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
