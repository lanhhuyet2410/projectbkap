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
        // 'css/site.css',
        'css/font-awesome.css',
        'css/jquery.smartmenus.bootstrap.css',
        'css/jquery.simpleLens.css',
        'css/slick.css',
        'css/nouislider.css',
        'css/theme-color/default-theme.css',
        'css/sequence-theme.css',
        'css/style.css',
        'https://fonts.googleapis.com/css?family=Lato',
        'https://fonts.googleapis.com/css?family=Raleway',

    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
        'js/bootstrap.js',
        'js/jquery.smartmenus.js',
        'js/jquery.smartmenus.bootstrap.js',
        'js/sequence.js',
        'js/sequence-theme.js',
        'js/jquery.simpleGallery.js',
        'js/jquery.simpleLens.js',
        'js/slick.js',
        'js/nouislider.js',
        'js/custom.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
