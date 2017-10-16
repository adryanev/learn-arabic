<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = 'Update Soal: ' . $model->idSoal;
$this->params['breadcrumbs'][] = ['label' => 'Soal', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSoal, 'url' => ['view', 'id' => $model->idSoal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="soal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
