<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alekseenko
 * Date: 2/8/16
 * Time: 8:36 PM
 * To change this template use File | Settings | File Templates.
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class WebController extends Controller{

    public $layout = 'web';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout(){
        return $this->render('about');
    }
}