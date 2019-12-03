<?php
namespace app\controllers;
use yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex(){
        Yii::trace('I am here!', 'site');
        Yii::info('Some info', 'site');
        Yii::warning('Low memory', 'site');
        Yii::error('Fatalist', 'site');
        return $this->render('index');
    }

    public function actionJoin(){
        return $this->render('join');
    }

    public function actionLogin(){
        return $this->render('login');
    }
}