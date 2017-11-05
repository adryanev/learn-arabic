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
        <h4 class="title">Edit Admin</h4>
    </div>

        <div class="card-content table-responsive">

            <?= $form->field($model, 'status')->textInput() ?>

            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

