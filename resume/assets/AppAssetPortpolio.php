<?php

namespace resume\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetPortpolio extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [        
        'template/portfolio/css/3-col-portfolio.css'
    ];
    public $js = [
		'template/portfolio/vendor/bootstrap/js/bootstrap.bundle.min.js'
    ];
	public $jsOptions = [
		'position' => \yii\web\View::POS_END
	];
    public $depends = [
        'yii\web\YiiAsset',
     //   'yii\bootstrap\BootstrapAsset',
    ];
}
