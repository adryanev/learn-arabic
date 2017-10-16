<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-detail-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Materi Detail', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <table class="table table-hover table-bordered dt-responsive nowrap" id="tabelKategori" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>
                    Id Materi Detail
                </th>
                <th>
                    Nama Materi
                </th>
                <th>
                    Nama Kategori
                </th>
                <th>
                    Isi
                </th>
                <th>Gambar</th>
                <th>Terjemahan</th>
                <th class="action-column">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($dataProvider as $data){
                $idMateriDetail = $data['idMateriDetail'];
                $namaMateri = $data['namaMateri'];
                $namaKategori = $data['namaKategori'];
                $isi = $data['isi'];
                $gambar = $data['gambar'];
                $terjemahan = $data['terjemahan'];


                echo "<tr>";
                echo "<td>$idMateriDetail</td>";
                echo "<td>$namaMateri</td>";
                echo "<td>$namaKategori</td>";
                echo "<td>$isi</td>";
                echo "<td>$gambar</td>";
                echo "<td>$terjemahan</td>";
                echo "<td>
                                <a href='/learn-arabic/web/kategori/$idMateriDetail' title=\"View\" aria-label=\"View\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-eye-open\"></span></a> 
                                <a href='/learn-arabic/web/kategori/update/$idMateriDetail' title=\"Update\" aria-label=\"Update\" data-pjax=\"0\">
                                <span class=\"glyphicon glyphicon-pencil\"></span></a> 
                                <a href='/learn-arabic/web/kategori/delete/$idMateriDetail'title=\"Delete\" aria-label=\"Delete\" data-pjax=\"0\" data-confirm=\"Are you sure you want to delete this item?\" data-method=\"post\">
                                <span class=\"glyphicon glyphicon-trash\"></span></a>
                                </td>";
                echo "</tr>";

            }

            ?>
            </tbody>
        </table>
    </div>
</div>
