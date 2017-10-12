<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = 'Create Soal';
$this->params['breadcrumbs'][] = ['label' => 'Soal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
