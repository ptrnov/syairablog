<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetBlog extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/DevBlog/css/plugin.css',
        'template/DevBlog/css/style.css',
    ];
    public $js = [
		'template/DevBlog/js/jquery.min.js',
		'template/DevBlog/js/plugin.js',
		'template/DevBlog/js/scripts.js',
    ];
	public $jsOptions = [
		'position' => \yii\web\View::POS_END
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
