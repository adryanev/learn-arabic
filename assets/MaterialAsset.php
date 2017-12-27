<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 21/10/17
 * Time: 15:16
 */

namespace app\assets;


use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ramosisw/yii2-material-dashboard/assets';


    public $css = [
        'css/material-dashboard.css',
        'material-design-icons/iconfont/material-icons.css',

    ];

    public $js = [
        'js/material.min.js',
        'js/chartist.min.js',
        'js/bootstrap-notify.js',
        'js/material-dashboard.js',
        'js/superfish.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',

    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

}