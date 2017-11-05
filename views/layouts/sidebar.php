<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 21/10/17
 * Time: 15:23
 */
$model = Yii::$app->user->getId();
$user = \app\models\Admin::findOne(['idAdmin'=>$model]);
$nama = $user->getNama();
?>
<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="/learn-arabic/web/site" class="simple-text">
           <?= Yii::$app->name ?>
        </a>
    </div>

    <div class="sidebar-wrapper">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'nav'],
                'items' => [
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label'=>'Beranda', 'icon'=>'home','url'=>['/site']],
                    ['label'=>'Akun Admin', 'icon'=>'person','url'=>['/admin']],
                    ['label'=>'Kategori', 'icon'=>'view_list','url'=>['/kategori']],
                    ['label'=>'Materi', 'icon'=>'book','url'=>['/materi']],
                    ['label'=>'Soal', 'icon'=>'library_books','url'=>['/soal']],

                    ['label'=>'Ujian', 'icon'=>'question_answer','url'=>['/ujian']],
                    ['label'=>'Video','icon'=>'live_tv','url'=>['/video']],
                    ['label'=>'Pengguna', 'icon'=>'group','url'=>['/user']],


                ],
            ]
        ) ?>
        <!-- <ul class="nav">
         <li class="active">
                <a href="site">
                    <i class="material-icons">dashboard</i>
                    <p>Beranda</p>
                </a>
            </li>
            <li>
                <a href="admin">
                    <i class="material-icons">person</i>
                    <p>Akun Admin</p>
                </a>
            </li>
            <li>
                <a href="materi">
                    <i class="material-icons">content_paste</i>
                    <p>Materi</p>
                </a>
            </li>
            <li>
                <a href="soal">
                    <i class="material-icons">library_books</i>
                    <p>Soal</p>
                </a>
            </li>
            <li>
                <a href="ujian">
                    <i class="material-icons">forum</i>
                    <p>Ujian</p>
                </a>
            </li>
            <li>
                <a href="user">
                    <i class="material-icons">group</i>
                    <p>Pengguna</p>
                </a>
            </li>
            <li>
            -->
    </div>
</div>
