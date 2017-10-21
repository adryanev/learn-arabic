<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "<span class='glyphicon glyphicon-user form-control-feedback'></span>{input}"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "<span class='glyphicon glyphicon-lock form-control-feedback'></span>{input}"
];
?>

<div class="row center">
    <div class="col-md-12">
        <h2 class="center"><b>Backend</b> Learn-Arabic</h2>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-header" data-background-color="purple">
        <h3 class="title">Login</h3>
        </div>
        <div class="card-content">
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

            <?= $form
                ->field($model, 'username', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

            <?= $form
                ->field($model, 'password', $fieldOptions2)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

            <div class="row">
                <div class="col-xs-8">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Belum punya akun? <a href="http://localhost/learn-arabic/web/signup">Daftar di sini</a></p>
                </div>
            </div>

        </div>

        <?php ActiveForm::end(); ?>

</div><!-- /.login-box -->
