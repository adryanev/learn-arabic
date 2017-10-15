<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Kategori', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <table class="table table-hover table-bordered dt-responsive nowrap" id="tabelKategori" cellspacing="0" width="100%">

            <thead>
                <tr>
                    <th>
                        Id Kategori
                    </th>
                    <th>Nama Kategori</th>
                    <th class="action-column">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($dataProvider as $data){
                        echo "<tr>";
                        echo "<td><a href='/learn-arabic/web/materi/materi-kategori?idKategori=$data->idKategori'>$data->idKategori</a></td>";
                        echo "<td><a href='/learn-arabic/web/materi/materi-kategori?idKategori=$data->idKategori'>$data->namaKategori</a></td>";
                        echo "<td>
                                <a href='/learn-arabic/web/kategori/$data->idKategori' title=\"View\" aria-label=\"View\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span></a> 
                                <a href='/learn-arabic/web/kategori/update/$data->idKategori' title=\"Update\" aria-label=\"Update\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-pencil\"></span></a> 
                                <a href='/learn-arabic/web/kategori/delete/$data->idKategori'title=\"Delete\" aria-label=\"Delete\" data-pjax=\"0\" data-confirm=\"Are you sure you want to delete this item?\" data-method=\"post\">
                                <span class=\"glyphicon glyphicon-trash\"></span></a>
                                </td>";
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>
    </div>
</div>
