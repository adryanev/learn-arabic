<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'accessToken')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tanggalLahir')->textInput() ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <?= $form->field($model, 'createdAt')->textInput() ?>

        <?= $form->field($model, 'updatedAt')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
