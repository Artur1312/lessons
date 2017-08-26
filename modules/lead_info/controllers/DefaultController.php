<?php

namespace app\modules\lead_info\controllers;

use yii\web\Controller;

/**
 * Default controller for the `lead_info` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
