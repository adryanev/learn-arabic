<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */

$this->title = 'Create Materi Detail';
$this->params['breadcrumbs'][] = ['label' => 'Materi Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-detail-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
