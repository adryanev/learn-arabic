<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */

$this->title = $model->idMateriDetail;
$this->params['breadcrumbs'][] = ['label' => 'Materi Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-detail-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->idMateriDetail], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idMateriDetail], [
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
                'idMateriDetail',
                'idMateri',
                'isi:ntext',
                'gambar',
                'terjemahan:ntext',
            ],
        ]) ?>
    </div>
</div>
