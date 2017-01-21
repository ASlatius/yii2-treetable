<?php

/**
 * @copyright Copyright &copy; Arno Slatius 2017
 * @package yii2-treetable
 * @version 1.0
 */

namespace slatiusa\treetable;

class TreetableAsset extends \Yii\web\AssetBundle {

    public $sourcePath = '@bower/jquery-treetable'; 
    public $css = [ 
        'css/jquery.treetable.css', 
    ];
    public $js = [ 
        'jquery.treetable.js', 
    ];
    public $depends = [
       'yii\web\JqueryAsset',
    ];
    
    /**
     * @inheritdoc
     */
    public static function register($view, $useDefaultTheme=false)
    {
        if ($useDefaultTheme) {
            $css[] = 'css/jquery.treetable.theme.default.css';
        }
        parent::register($view);
    }
}