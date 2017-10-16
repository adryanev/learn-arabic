<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SoalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Soal', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'idSoal',
                'soal',
                'a',
                'b',
                'c',
                'd',
                'jawaban',
                'gambar',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
