<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = 'Update Admin: ' . $model->idAdmin;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAdmin, 'url' => ['view', 'id' => $model->idAdmin]];
$this->params['breadcrumbs'][] = 'Update';
?>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>


