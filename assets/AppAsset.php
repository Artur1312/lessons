<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
  ];
    public $js = [

      'js/main.js',
        //for modal structure
      'js/modals/modal.js',
        'js/modals/modal1.js',
       'js/modals/modal2.js',
      'js/modals/modal3.js',
       //end module structure
////        'js/jquery-3.2.1.min.js',
       'js/bootstrap.min.js',
//
  ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
       
    ];
}
