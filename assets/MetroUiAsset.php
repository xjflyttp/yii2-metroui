<?php

namespace xj\metro;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class MetroUiAsset extends AssetBundle
{

    public $sourcePath = '@bower/metro/build';
    public $js = [
        'js/metro.js',
    ];
    public $css = [
        'css/metro.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
