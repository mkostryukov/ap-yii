<?php

namespace backend\helpers;

use Yii;

class AppAssetHelper
{
    /**
     * It allows you to get the name of the css class.
     * You can add the appropriate class to the body tag for dynamic change the template's appearance.
     *
     * @return string
     */
    public static function skinClass()
    {
        /** @var \backend\assets\AppAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('backend\assets\AppAsset');
        return $bundle->skin;
    }

    public static function bodyClass()
    {
        /** @var \backend\assets\AppAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('backend\assets\AppAsset');
        return $bundle->bodyClass;
    }
}