Asset Bundles
=============

Bootstrap is a complex front-end solution, which includes CSS, JavaScript, fonts and so on.
In order to allow you the most flexible control over Bootstrap components, this extension provides several asset bundles.
They are:

- [[Yiisoft\Yii\Bootstrap3\BootstrapAsset|BootstrapAsset]] - contains only the main CSS files.
- [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset|BootstrapPluginAsset]] - depends on [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contains the javascript files.
- [[Yiisoft\Yii\Bootstrap3\BootstrapThemeAsset|BootstrapThemeAsset]] - depends on [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]], contains the Bootstrap default theme CSS.

Particular application needs may require different bundle (or bundle combination) usage.
If you need only CSS styles, [[Yiisoft\Yii\Bootstrap3\BootstrapAsset]] will be enough for you. However, if
you want to use Bootstrap JavaScript, you need to register [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]].

> Tip: most of the widgets register [[Yiisoft\Yii\Bootstrap3\BootstrapPluginAsset]] automatically.
