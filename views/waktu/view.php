<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Waktu */

$this->title = $model->idWaktu;
$this->params['breadcrumbs'][] = ['label' => 'Waktu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waktu-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->idWaktu], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idWaktu], [
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
                'idWaktu',
                'namaWaktu',
                'durasiWaktu',
            ],
        ]) ?>
    </div>
</div>
