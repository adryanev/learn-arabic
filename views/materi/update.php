<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */

$this->title = 'Update Materi: ' . $model->idMateri;
$this->params['breadcrumbs'][] = ['label' => 'Materi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMateri, 'url' => ['view', 'id' => $model->idMateri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
