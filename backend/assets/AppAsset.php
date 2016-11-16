<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/datepicker3.css',
        'css/styles.css',
        'css/jquery-ui.css',
    ];
    public $js = [
        'js/lumino.glyphs.js',
        'js/bootstrap.min.js',
        'tinymce/tinymce.min.js',
        'js/main.js',
        'js/jquery-ui.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
