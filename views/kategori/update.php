<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = 'Update Kategori: ' . $model->idKategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idKategori, 'url' => ['view', 'id' => $model->idKategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
