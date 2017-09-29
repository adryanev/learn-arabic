<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 29/09/17
 * Time: 16:16
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminltePluginAsset extends AssetBundle
{

    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}