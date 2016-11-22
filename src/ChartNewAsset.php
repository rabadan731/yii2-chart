<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace rabadan731\chartNew;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ChartNewAsset extends AssetBundle
{
    public $sourcePath = '@bower/ChartNew/';
    public $css = [
    ];
    public $js = [
        'ChartNew.js',
		'Add-ins\stats.js',
    ];
    public $depends = [
		'yii\bootstrap\BootstrapAsset',
    ];
}
