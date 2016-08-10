<?php

namespace backend\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SlimScrollAssetBundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jquery-slimscroll/';

    /**
     * @inheritdoc
     */
    public $js = [
        'jquery.slimscroll.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}