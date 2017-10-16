<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UjianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ujian-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Ujian', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idUjian',
                'idUser',
                'tglUjian',
                'totalSkor',
                'idWaktu',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
