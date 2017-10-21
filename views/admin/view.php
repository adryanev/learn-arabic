<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header">
        <h4 class="title">Detail Admin</h4>

    </div>
    <div class="card-content table-responsive">
        <?= Html::a('Update', ['update', 'id' => $model->idAdmin], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idAdmin], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'idAdmin',
                'username',
                'nama',
                'email:email',
                'password',
                'authKey',
                'accessToken',
                'status',
                'createdAt',
                'updatedAt',
            ],
        ]) ?>
    </div>
</div>
