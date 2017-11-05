<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubMateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Materi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Sub Materi</h4>
    </div>
    <div class="card-content table-responsive">
        <?php $count = \app\models\Kategori::find()->count();
            if($dataProvider->count < $count){
                ?>
                <?= Html::a('Create Sub Materi', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
                <?php
            }
                ?>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= \fedemotta\datatables\DataTables::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'rowOptions'=> function($model, $key, $index, $grid){
                        return ['data-id'=>$model['id']];
            },
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'idSubMateri',
                'namaMateri',
                'namaKategori',
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
            location.href = '" . Url::to(['materi-detail/materi-detail']) . "?idSubMateri=' + id;
    });
");