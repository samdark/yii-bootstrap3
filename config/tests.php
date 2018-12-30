<?php

return [
    'app' => [
        'id' => 'testapp',
        'aliases' => [
            '@webroot' => '@yii/bootstrap3/tests',
            '@public'  => '@yii/bootstrap3/tests',
            '@web'     => '@yii/bootstrap3/tests',
            '@bower'   => '@vendor/bower-asset',
            '@npm'     => '@vendor/npm-asset',
        ],
    ],
    'request' => [
        'cookieValidationKey' => 'wefJDF8sfdsfSDefwqdxj9oq',
        'scriptFile' => __DIR__ . '/index.php',
        'scriptUrl' => '/index.php',
    ],
    'assetManager' => [
        '__class'   => \yii\web\AssetManager::class,
        'basePath'  => '@webroot/assets',
        'baseUrl'   => '@web/assets',
    ],
];
