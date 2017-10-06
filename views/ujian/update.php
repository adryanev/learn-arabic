<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ujian */

$this->title = 'Update Ujian: ' . $model->idUjian;
$this->params['breadcrumbs'][] = ['label' => 'Ujian', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUjian, 'url' => ['view', 'id' => $model->idUjian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ujian-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
