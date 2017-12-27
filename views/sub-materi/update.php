<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubMateri */

$this->title = 'Update Sub Materi: ' . $model->idSubMateri;
$this->params['breadcrumbs'][] = ['label' => 'Sub Materi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSubMateri, 'url' => ['view', 'id' => $model->idSubMateri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-materi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
