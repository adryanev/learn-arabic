<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ujian */

$this->title = 'Create Ujian';
$this->params['breadcrumbs'][] = ['label' => 'Ujian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ujian-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
