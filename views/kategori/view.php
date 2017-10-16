<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = $model->idKategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->idKategori], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idKategori], [
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
                'idKategori',
                'namaKategori',
            ],
        ]) ?>
    </div>
</div>
