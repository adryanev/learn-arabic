<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubMateri */

    $this->title = $model->idSubMateri;
$this->params['breadcrumbs'][] = ['label' => 'Sub Materi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">idSubMateri</h4>
    </div>
    <div class="card-content table-responsive">
        <?= Html::a('Update', ['update', 'id' => $model->idSubMateri], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idSubMateri], [
        'class' => 'btn btn-danger btn-flat',
        'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
        ],
        ]) ?>
        <hr>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'idSubMateri',
                'idMateri',
                'idKategori',
                'timestamp',
            ],
        ]) ?>
    </div>
</div>
