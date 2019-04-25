<?php

return [
    'app' => [
        'id' => 'testapp',
        'aliases' => [
            '@webroot' => '@Yiisoft/Yii/Bootstrap3/Tests',
            '@public'  => '@Yiisoft/Yii/Bootstrap3/Tests',
            '@web'     => '@Yiisoft/Yii/Bootstrap3/Tests',
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
