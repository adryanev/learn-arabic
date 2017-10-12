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
<div class="materi-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Materi', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= \fedemotta\datatables\DataTables::widget([
            'dataProvider' => $dataProvider,
            'rowOptions'=>function($model, $key, $index, $grid){
                return ['data-id'=> $model->idMateri] ;
            },
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'idMateri',
                'namaMateri',
                'idKategori',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
<?php

$this->registerJs("
    $('tbody td').css('cursor', 'pointer');
    $('tbody td').click(function (e) {
        var id = $(this).closest('tr').data('id');
        console.log('id = '+id);
        if (e.target == this && id) location.href = '" . Url::to(['materi-detail/detail']) . "?idMateri=' + id;
    });
");