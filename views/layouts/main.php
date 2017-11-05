<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


    app\assets\MaterialAsset::register($this);
    //app\assets\AdminltePluginAsset::register($this);

  //  $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(Yii::$app->name) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'sidebar.php'
          //  ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'navbar.php'
          //  ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'isi.php',
            ['content' => $content]
        ) ?>
        <?= $this->render(
            'footer.php'
        //  ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>

