<?php

/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@diginova/metronic/assets';

    /**
     * @var array depended packages
     */
    public $depends = [
        'diginova\metronic\bundles\FontAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/uniform/css/uniform.default.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/jquery.cokie.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/scripts/metronic.js',
    ];

    /**
     * @var array js options
     */
    public $jsOptions = [
        'conditions' => [
            'plugins/respond.min.js' => 'if lt IE 9',
            'plugins/excanvas.min.js' => 'if lt IE 9',
        ],
    ];
}
