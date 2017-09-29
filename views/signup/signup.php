<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 29/09/17
 * Time: 15:30
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Daftar Akun Admin';

$fieldUsername = [
    'options' => ['class' => 'form-group has-feedback'] ,
    'inputTemplate' => "<span class='glyphicon glyphicon-user form-control-feedback'></span>{input}"
];
$fieldNama = [
    'options' => ['class' => 'form-group has-feedback'] ,
    'inputTemplate' => "<span class='glyphicon glyphicon-nameplate form-control-feedback'></span>{input}"
];
$fieldEmail = [
    'options' => ['class' => 'form-group has-feedback'] ,
    'inputTemplate' => "<span class='glyphicon glyphicon-envelope form-control-feedback'></span>{input}"
];
$fieldPassword = [
    'options' => ['class' => 'form-group has-feedback'] ,
    'inputTemplate' => "<span class='glyphicon glyphicon-lock form-control-feedback'></span>{input}"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Backend</b></br>Learning-Arabic</a>
    </div>
    <!-- /.login-logo -->

    <div class="login-box-body">
        <p class="login-box-msg">Daftar Akun Admin</p>

        <?php $form = ActiveForm::begin(['id' => 'signup-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldUsername)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldPassword)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
        <?= $form
            ->field($model, 'nama', $fieldNama)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('nama')]) ?>
        <?= $form
            ->field($model, 'email', $fieldEmail)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>

            <div class="row">
            <!-- /.col -->
            <div class="col-md-12 ">
                <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'signup-button']) ?>
            </div>
                <!-- /.col -->
            </div>

        <?php ActiveForm::end(); ?>
</div>


