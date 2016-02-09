<?php

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

    public function actionPress(){
        return $this->render('press');
    }

    public function actionPrice(){
        return $this->render('price');
    }

    public function actionSpec(){
        return $this->render('spec');
    }

    public function actionTypical(){
        return $this->render('typical');
    }
}