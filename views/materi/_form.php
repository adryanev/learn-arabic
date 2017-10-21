<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">'Materi'</h4>
    </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">

                    <?= $form->field($model, 'namaMateri')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'timestamp')->textInput() ?>

        </div>
        <div class="box-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
