<?php
namespace albertgeeca\shop\backend\assets;
use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */

class EditProductAsset extends AssetBundle
{
    public $sourcePath = '@vendor/albert-sointula/yii2-shop/backend/web';

    public $css = [
        'css/style.css',
    ];

    public $js = [
        'js/title-generation.js',
        'js/add-additional.js',
    ];

    public $depends = [
        'albertgeeca\shop\backend\assets\ProductAsset',
        'albertgeeca\shop\backend\assets\InputTreeAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}