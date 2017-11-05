<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */

    $this->title = $model->idMateriDetail;
$this->params['breadcrumbs'][] = ['label' => 'Materi Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Materi Detail</h4>
    </div>
    <div class="card-content table-responsive">
        <?= Html::a('Update', ['update', 'id' => $model->idMateriDetail], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idMateriDetail], [
        'class' => 'btn btn-danger btn-flat',
        'data' => [
        'confirm' => 'Apakah anda yakin menghapus item ini?',
        'method' => 'post',
        ],
        ]) ?>
        <hr>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'idMateriDetail',
                'idSubMateri',
                'isi:ntext',
                'gambar',
                'suara',
                'terjemahan:ntext',
                'timestamp',
            ],
        ]) ?>
    </div>
</div>
