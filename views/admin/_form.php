<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="card">
    <div class="card-header" data-background-color="blue">
        <?php $form = ActiveForm::begin(); ?>
        <h4 class="title">Edit Akun Admin</h4>
    </div>

        <div class="card-content table-responsive">

            <?= $form->field($model, 'username')->textInput()?>
            <?= $form->field($model, 'nama')->textInput()?>
            <?= $form->field($model, 'password')->passwordInput(['value'=>''])->label('Password sekarang')?>
            <?= $form->field($model, 'password')->passwordInput(['value'=>''])->label('Password Baru')?>
            <?= $form->field($model, 'password')->passwordInput(['value'=>''])->label('Masukkan Ulang Password Baru')?>
            <?= $form->field($model, 'status')->radioList(['10'=>'Aktif',
                '0'=>'Nonaktif'],['class'=> 'radio']) ?>
            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

