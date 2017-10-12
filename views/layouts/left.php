<?php
$model = Yii::$app->user->getId();
$user = \app\models\Admin::findOne(['idAdmin'=>$model]);
$nama = $user->getNama();
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=$nama; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Utilitas Admin', 'options' => ['class' => 'header']],
                   // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                   // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label'=>'Beranda', 'icon'=>'home','url'=>['/site']],
                    ['label'=>'Akun Admin', 'icon'=>'user','url'=>['/admin']],
                    ['label'=>'Materi', 'icon'=>'book','url'=>['/kategori']],
                    ['label'=>'Soal', 'icon'=>'question-circle-o','url'=>['/soal']],
                   // ['label'=>'Waktu', 'icon'=>'clock-o','url'=>['/waktu']],
                    ['label'=>'Ujian', 'icon'=>'question-circle','url'=>['/ujian']],
                    //['label'=>'Pengguna', 'icon'=>'users','url'=>['/user']],
                    //['label'=>'Statistik', 'icon'=>'bar-chart','url'=>['/statistik']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
