<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetResume extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [        
        //'template/Resume/vendor/bootstrap/css/bootstrap.min.css',
        'https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i',
        //'template/Resume/css/resume.min.css',
        'template/Resume/vendor/font-awesome/css/font-awesome.min.css',
        'template/Resume/vendor/devicons/css/devicons.min.css',
        'template/Resume/vendor/simple-line-icons/css/simple-line-icons.css',
    ];
    public $js = [
		'template/Resume/vendor/jquery/jquery.min.js',
		'template/Resume/vendor/bootstrap/js/bootstrap.bundle.min.js',
		'template/Resume/vendor/jquery-easing/jquery.easing.min.js',
		'template/Resume/js/resume.min.js',
    ];
	public $jsOptions = [
		'position' => \yii\web\View::POS_END
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
