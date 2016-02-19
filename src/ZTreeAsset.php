<?php

/**
 * @package yii2-ztree
 */

namespace yadjet\ztree;

/**
 * Asset bundle for ZTree Widget
 *
 * @author Tony Krutins <diselop@gmail.com>
 * @since 0.1.0
 */
class ZTreeAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/yadjet/yii2-ztree/src/assets';
    
    public $js = [
        'ztree.min.js',
        'jquery.ztree.exhide-3.5.min.js'
    ];
    
    public $css = [
        'ztree.css'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
