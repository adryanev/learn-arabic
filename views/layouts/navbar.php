<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 21/10/17
 * Time: 15:25
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$model = Yii::$app->user->getId();
$user = \app\models\Admin::findOne(['idAdmin'=>$model]);
$nama = $user->getNama();
?>
<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><?= $this->title ?></a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                            <?=$nama?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post']
                                ) ?>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
