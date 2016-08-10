<?php

namespace backend\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminLTEAssetBundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/admin-lte/dist/';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/skin-blue.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/app.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'backend\assets\SlimScrollAssetBundle',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = 'skin-blue';

    public $bodyClass = 'fixed hold-transition';

    public $rightSidebar = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('skin-blue' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }
            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }
        parent::init();
    }
}