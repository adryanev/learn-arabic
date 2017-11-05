<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->session->hasFlash("succcess")):
        Yii::$app->session->getFlash('success');
        endif;
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Materi Detail</h4>
    </div>

    <div class="card-content table-responsive">
        <?= Html::a('Create Materi Detail', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <hr>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= \fedemotta\datatables\DataTables::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'namaMateri',
                'namaKategori',
                //'idMateriDetail',
               // 'idSubMateri',
                'isi:ntext',
                'gambar',
                'suara',
                'terjemahan:ntext',
                // 'timestamp',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
