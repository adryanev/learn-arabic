<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 21/10/17
 * Time: 15:25
 */
use yii\widgets\Breadcrumbs;
?>

<div class="content">
    <?=
    Breadcrumbs::widget(
        [
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]
    ) ?>
    <div class="container-fluid">
        <?=$content?>
    </div>
</div>
