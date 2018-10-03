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
        'css/main.css',
        'css/normalize.css',
        'css/font-awesome.min.css',
        'css/fontello.css',
        'fonts/icon-7-stroke/css/pe-icon-7-stroke.css',
        'fonts/icon-7-stroke/css/helper.css',
        'css/animate.css',
        'css/bootstrap-select.min.css',
        'css/bootstrap.min.css',
        'css/icheck.min_all.css',
        'css/price-range.css',
        'css/owl.carousel.css',  
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/lightslider.min.css',
        'css/style.css',
        'css/responsive.css'
    ];
    public $js = [
        'js/modernizr-2.6.2.min.js',
        'js/jquery-1.10.2.min.js', 
        'js/bootstrap.min.js',
        'js/bootstrap-select.min.js',
        'js/bootstrap-hover-dropdown.js',

        'js/easypiechart.min.js',
        'js/jquery.easypiechart.min.js',

        'js/owl.carousel.min.js',
        'js/wow.js',

        'js/icheck.min.js',
        'js/price-range.js',
        'js/lightslider.min.js',
        
        'js/imagegallery.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
