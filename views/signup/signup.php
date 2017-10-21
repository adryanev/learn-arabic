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

<div class="row center">
    <div class="col-md-12">
        <h2 class="center"><b>Backend</b> Learn-Arabic</h2>
    </div>
    <!-- /.login-logo -->

    <div class="card">
        <div class="card-header"data-background-color="purple">
            <h4 class="titile">Daftar Akun Admin</h4>
        </div>

        <div class="card-content">
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
            <div class="row">
                <div class="col-md-8">
                    <p>Sudah punya akun? <a href="../web">Login di sini</a>.</p>
                </div>
            </div>


        </div>


        <?php ActiveForm::end(); ?>
</div>


