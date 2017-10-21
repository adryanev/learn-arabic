<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ujian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">'Ujian'</h4>
    </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">

                    <?= $form->field($model, 'idUser')->textInput() ?>

        <?= $form->field($model, 'tanggalUjian')->textInput() ?>

        <?= $form->field($model, 'totalSkor')->textInput() ?>

        </div>
        <div class="box-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
