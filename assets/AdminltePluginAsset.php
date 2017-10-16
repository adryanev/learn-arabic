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
        'chartjs/Chart.js',
        'datatables/dataTables.bootstrap.min.js',
        'bootstrap-slider/bootstrap-slider.js',
        'datepicker/bootstrap-datepicker.js',
        'fastclick/fastclick.js',
        'jQuery/jquery-2.2.3.min.js',
        'jQueryUI/jquery-ui.js',
        'timepicker/bootstrap-timepicker.js',
        'iCheck/icheck.js',
    ];
    public $css = [
        'bootstrap-slider/slider.css',
        'datatables/dataTables.bootstrap.css',
        'datepicker/datepicker3.css',
        'timepicker/bootstrap-timepicker.css',
        'iCheck/all.css',

    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}