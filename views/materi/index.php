<?php


use yii\helpers\Url;
use yii\helpers\Html;
use kartik\grid\GridView;

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
        <table class="table table-hover table-bordered dt-responsive nowrap" id="tabelMateri" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>
                    Id Materi
                </th>
                <th>Nama Materi</th>
                <th>Id Kategori</th>
                <th class="action-column">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($dataProvider as $data){
                echo "<tr>";
                echo "<td><a href='/learn-arabic/web/kategori/kategori-materi?idMateri=$data->idMateri'>$data->idMateri</a></td>";
                echo "<td><a href='/learn-arabic/web/kategori/kategori-materi?idMateri=$data->idMateri'>$data->namaMateri</a></td>";
                echo "<td><a href='/learn-arabic/web/kategori/kategori-materi?idMateri=$data->idMateri'>$data->idKategori</a></td>";
                echo "<td>
                                <a href='/learn-arabic/web/materi/$data->idMateri' title=\"View\" aria-label=\"View\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span></a> 
                                <a href='/learn-arabic/web/materi/update/$data->idMateri' title=\"Update\" aria-label=\"Update\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-pencil\"></span></a> 
                                <a href='/learn-arabic/web/materi/delete/$data->idMateri'title=\"Delete\" aria-label=\"Delete\" data-pjax=\"0\" data-confirm=\"Are you sure you want to delete this item?\" data-method=\"post\">
                                <span class=\"glyphicon glyphicon-trash\"></span></a>
                                </td>";
                echo "</tr>";
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
