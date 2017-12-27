<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Video */

$this->title = 'Update Video: ' . $model->idVideo;
$this->params['breadcrumbs'][] = ['label' => 'Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idVideo, 'url' => ['view', 'id' => $model->idVideo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="video-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
