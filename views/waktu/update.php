<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Waktu */

$this->title = 'Update Waktu: ' . $model->idWaktu;
$this->params['breadcrumbs'][] = ['label' => 'Waktu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idWaktu, 'url' => ['view', 'id' => $model->idWaktu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="waktu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
