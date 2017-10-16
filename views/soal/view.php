<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */

$this->title = $model->idSoal;
$this->params['breadcrumbs'][] = ['label' => 'Soal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->idSoal], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idSoal], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'idSoal',
                'soal',
                'a',
                'b',
                'c',
                'd',
                'jawaban',
                'gambar',
            ],
        ]) ?>
    </div>
</div>
