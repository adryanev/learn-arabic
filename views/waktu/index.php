<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WaktuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Waktu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waktu-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Waktu', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idWaktu',
                'namaWaktu',
                'durasiWaktu',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
