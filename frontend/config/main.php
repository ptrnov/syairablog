	<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php')
    //require(__DIR__ . '/params.php'),
    //require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
	'name'=>'Syaira.Net',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
	 'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' =>'Syairasyaka1981',
            'charset' => 'utf8',
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
	    'enableStrictParsing' => false,
	    'rules' => [
            ],
        ],
	'view' => [
            'theme' => [
                'pathMap' => [
						// '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
						'@app/views' => '@frontend/views/layouts'
                ],
            ],
        ],
	'assetManager' => [
			'bundles' => [
				'dmstr\web\AdminLteAsset' => [
					'skin' => 'skin-black',
					'skin' => "skin-blue",
					// 'skin' =>"skin-red",
					// 'skin' =>"skin-yellow",
					// 'skin' =>"skin-purple",
					// 'skin' =>"skin-green",
					// 'skin' =>"skin-blue-light",
					// 'skin' =>"skin-black-light",
					// 'skin' =>"skin-red-light",
					// 'skin' =>"skin-yellow-light",
					// 'skin' =>"skin-purple-light",
					// 'skin' =>'skin-green-light'
				],
			],
		],
    ],
    'params' => $params,
];
