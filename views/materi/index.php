<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header" data-background-color="blue">
        <h4 class="title">Pintasan</h4>
    </div>
    <div class="card-content">
        <div class="row">
            <div class="col-md-3">
                <?= Html::a('Create Kategori', ['/kategori/create'], ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
            <div class="col-md-3">
                <?= Html::a('Create Materi', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            </div>
            <div class="col-md-3">
                <?= Html::a('Create Sub Materi', ['/sub-materi/create'], ['class' => 'btn btn-info btn-flat']) ?>
            </div>
            <div class="col-md-3">
                <?= Html::a('Create Materi Detail', ['/materi-detail/create'], ['class' => 'btn btn-warning btn-flat']) ?>
            </div>
        </div>
    </div>
</div>
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
            'rowOptions' => function($model, $key, $index, $grid){
                        return ['data-id'=>$model['idMateri']];
            },
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

<?php
$this->registerJs("$('tbody td').css('cursor', 'pointer');
    $('tbody td').click(function (e) {
        var id = $(this).closest('tr').data('id');
        if (e.target == this)
            location.href = '" . Url::to(['sub-materi/sub-materi']) . "?idMateri=' + id;
    });
");