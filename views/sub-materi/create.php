<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubMateri */

$this->title = 'Create Sub Materi';
$this->params['breadcrumbs'][] = ['label' => 'Sub Materi', 'url' => ['/materi/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-materi-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
