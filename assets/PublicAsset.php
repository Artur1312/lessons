<?php
/**
 * Created by PhpStorm.
 * User: Diwork
 * Date: 25.12.2017
 * Time: 21:25
 */

namespace app\assets;


use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/light-bootstrap-dashboard.css',
        'css/demo.css',
        '//fonts.googleapis.com/css?family=Montserrat:400,700,200',
        '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'

    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/light-bootstrap-dashboard.js',
        'js/demo.js',
        'js/main.js',
        //for modal structure
        'js/modals/modal.js',
        'js/modals/modal1.js',
        'js/modals/modal2.js',
        'js/modals/modal3.js',
        //end module structure
//        'js/jquery-3.2.1.min.js',

    ];

    public $cssOptions = [
        'type' => 'text/css',
    ];
    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',

    ];


}