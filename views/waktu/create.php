<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Waktu */

$this->title = 'Create Waktu';
$this->params['breadcrumbs'][] = ['label' => 'Waktu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waktu-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
