<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace Yiisoft\Yii\Bootstrap3;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        \Yiisoft\Yii\JQuery\JqueryAsset::class,
        BootstrapAsset::class,
    ];
}
