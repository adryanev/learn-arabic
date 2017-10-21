<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */

$this->title = 'Update Materi Detail: ' . $model->idMateriDetail;
$this->params['breadcrumbs'][] = ['label' => 'Materi Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMateriDetail, 'url' => ['view', 'id' => $model->idMateriDetail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">
    <div class="card-content">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>



</div>
