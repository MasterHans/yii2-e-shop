<?php
/**
 * Created by PhpStorm.
 * User: sag
 * Date: 25.09.2018
 * Time: 21:56
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => View::POS_HEAD,
    ];
}
