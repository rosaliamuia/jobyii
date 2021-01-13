<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/homestyle.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/fonts.css'
    ];
    public $js = [
        'js/custom.js',
        'js/owl.carousel.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
