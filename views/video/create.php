<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
