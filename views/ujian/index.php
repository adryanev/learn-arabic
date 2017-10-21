<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UjianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header"data-background-color="purple">
        <h4 class="title">Ujian</h4>
    </div>
    <div class="card-content table-responsive">
        <?= Html::a('Create Ujian', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= \fedemotta\datatables\DataTables::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idUjian',
                'idUser',
                'tanggalUjian',
                'totalSkor',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
