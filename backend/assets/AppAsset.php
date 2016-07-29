<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
/*class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}*/

class AppAsset extends AssetBundle
{

    public $sourcePath = '@bower/';

    public $css = [
        'admin-lte/dist/css/AdminLTE.min.css',
        'admin-lte/dist/css/skins/skin-blue.min.css',
    ];

    public $js = [
        'admin-lte/dist/js/app.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}