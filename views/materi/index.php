<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header"data-background-color="purple">
        <h4 class="title">Materi</h4>
    </div>
    <div class="card-content table-responsive">
        <?= Html::a('Create Materi', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= \fedemotta\datatables\DataTables::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idMateri',
                'namaMateri:ntext',
                'timestamp',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
