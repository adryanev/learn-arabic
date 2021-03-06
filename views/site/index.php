<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Beranda';
?>

<div class="card">

    <div class="card-header"  data-background-color="green">
        <h3 class="title">Selamat Datang di Admin Panel!</h3>

    </div>
    <div class="card-content">
              <p> Di sini anda bisa membuat soal, menambah materi, melihat user, dan melihat admin.</p>
        <br>
        <blockquote>
            <p>Engkau tak dapat meraih ilmu kecuali dengan enam hal yaitu cerdas, selalu ingin tahu, tabah, punya bekal dalam menuntut ilmu, bimbingan dari guru dan dalam waktu yang lama.</p>
            <small>Ali bin Abi Thalib</small>
        </blockquote>
        <blockquote>
            <p>Hendaklah kamu semua mengusahakan ilmu pengetahuan itu sebelum dilenyapkan. Lenyapnya ilmu pengetahuan ialah dengan matinya orang-orang yang memberikan atau mengajarkannya. Seorang itu tidaklah dilahirkan langsung pandai, jadi ilmu pengetahuan itu pastilah harus dengan belajar.</p>
            <small>Ibnu Mas'ud. ra</small>
        </blockquote>
    </div>
</div>
<div class="card">
    <div class="card-header" data-background-color="blue">
        <h4 class="title">Pintasan</h4>
    </div>
    <div class="card-content">
        <div class="row">
            <div class="col-md-4">
                <?= Html::a('Create Kategori', ['/kategori/create'], ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
            <div class="col-md-4">
                <?= Html::a('Create Materi', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
            </div>
            <div class="col-md-4">
                <?= Html::a('Create Sub Materi', ['/sub-materi/create'], ['class' => 'btn btn-info btn-flat']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= Html::a('Create Materi Detail', ['/materi-detail/create'], ['class' => 'btn btn-warning btn-flat']) ?>
            </div>
            <div class="col-md-4">
                <?= Html::a('Create Soal', ['/soal/create'], ['class' => 'btn btn-default btn-flat']) ?>
            </div>
            <div class="col-md-4">
                <?= Html::a('Create Pengguna', ['/user/create'], ['class' => 'btn btn-danger btn-flat']) ?>
            </div>
        </div>
    </div>
</div>
