<?php
/**
 * Created by PhpStorm.
 * User: User-9
 * Date: 03.10.2017
 * Time: 12:53
 */

namespace app\assets;


use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [

        'css/materialize.css',
        'css/style.css',
//        //chartist
        'js/materialize/plugins/chartist-js/chartist.min.css',
//        //dataTables
        'js/materialize/plugins/data-tables/css/jquery.dataTables.min.css',
//        //fullcalendar
        'js/materialize/plugins/fullcalendar/css/fullcalendar.min.css',
        'css/prism.css',
//        'css/site.css',

    ];
    public $js = [

        'js/jquery-1.11.2.min.js',
        'js/materialize/materialize.js',


//        'js/materialize/moment.js',

        'js/materialize/prism.js',
        'js/materialize/raphael-min.js',


        //data table
        'js/materialize/plugins/data-tables/data-tables-script.js',
        'js/materialize/plugins/data-tables/js/jquery.dataTables.min.js',

//        //chartjs
//        'js/materialize/plugins/chartjs/chart-script.js',
//        'js/materialize/plugins/chartjs/chart.min.js',
//        'js/materialize/plugins/chartjs/chartjs-sample-chart.js',

        //d3
        'js/materialize/plugins/d3/d3.min.js',

        //lib
        'js/materialize/plugins/fullcalendar/lib/jquery-ui.custom.min.js',
        'js/materialize/plugins/fullcalendar/lib/moment.min.js',

        //fullcalendar
        'js/materialize/plugins/fullcalendar/fullcalendar-script.js',
        'js/materialize/plugins/fullcalendar/js/fullcalendar.min.js',



        //jvectormap
        'js/materialize/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'js/materialize/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'js/materialize/plugins/jvectormap/vectormap-script.js',



        //perfect-scrollbar
        'js/materialize/plugins/perfect-scrollbar/perfect-scrollbar.min.js',

        //sparkline

        'js/materialize/plugins/sparkline/jquery.sparkline.min.js',

        'js/materialize/plugins/sparkline/sparkline-script.js',
        //xcharts
//        'js/materialize/plugins/xcharts/xcharts.min.js',
//        'js/materialize/plugins/xcharts/xcharts-script.js',

//        //chartist
//        'js/materialize/plugins/chartist-js/chartist.min.js',


//        //morris-chart
//        'js/materialize/plugins/morris-chart/morris.min.js',
//        'js/materialize/plugins/morris-chart/morris-script.js',
//
//
//        //flot-script
//        'js/materialize/plugins/flot-chart/flot-script.js',
        'js/materialize/plugins1.js',




    ];

    public $font = [

        'font/material-design-icons/Material-Design-Icons.ttf',
        'font/roboto/Roboto-Bold.ttf',
        'font/roboto/Roboto-Light.ttf',
        'font/roboto/Roboto-Medium.ttf',
        'font/roboto/Roboto-Thin.ttf',
        'font/roboto/Roboto-Regular.ttf',

    ];

    public $depends = [
     'yii\web\YiiAsset',
//       'macgyer\yii2materializecss\assets\MaterializeAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}