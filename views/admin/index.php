<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Tabel Admin</h4>
                <p class="category">Menyimpan data-data admin backend.</p>
            </div>
            <div class="card-content table-responsive">
                <hr>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'layout' => "{items}\n{summary}\n{pager}",
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        //'idAdmin',
                        'username',
                        'nama',
                        'email:email',
                        //'password',
                        // 'authKey',
                        // 'accessToken',
                        'status',
                        'createdAt',
                        // 'updatedAt',

                        ['class' => 'yii\grid\ActionColumn','visible' => Yii::$app->user->id,'template' => '{view} {update}'],
                    ],
                ]); ?>
            </div>
        </div>

    </div>

</div>
