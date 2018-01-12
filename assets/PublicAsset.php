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

        'css/comment.css',
        'css/demo.css',

        'css/light-bootstrap-dashboard.css',


        '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
'//fonts.googleapis.com/css?family=Montserrat:400,700,200',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/light-bootstrap-dashboard.js',
        'js/plugins/bootstrap-switch.js',
        'js/plugins/bootstrap-notify.js',
        'js/plugins/bootstrap-datepicker.js',
        'js/plugins/nouislider.min.js',
        'js/main.js',
        'js/demo.js',

        //for modal structure
        'js/modals/modal.js',
        'js/modals/modal1.js',
        'js/modals/modal2.js',
        'js/modals/modal3.js',
        //end module structure


    ];

    public $cssOptions = [
        'type' => 'text/css',
    ];
    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',

    ];


}