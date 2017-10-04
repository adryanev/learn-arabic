<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-detail-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Materi Detail', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idMateriDetail',
                'idMateri',
                'isi:ntext',
                'gambar',
                'terjemahan:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
