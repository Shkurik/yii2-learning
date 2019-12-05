<?php
namespace app\controllers;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use app\models\UserRecord;
use app\models\UserIdentity;
use yii;
use yii\web\Controller;


class UserController extends Controller
{
    public function actionJoin(){
        if(Yii::$app->request->isPost){
            return $this->actionJoinPost();
        }

        $userRecord = new UserRecord();
        $userRecord->setTestUser();

        $userJoinForm = new UserJoinForm();
        $userJoinForm->setUserRecord($userRecord);

        return $this->render('join', compact('userJoinForm'));
    }
    private function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        if ( $userJoinForm->load(Yii::$app->request->post())){
            if($userJoinForm->validate()){
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/user/login');
            }
        }
        return $this->render('join', compact('userJoinForm'));
    }

    public function actionLogin(){
        $userLoginForm = new UserLoginForm();
        return $this->render('login', compact('userLoginForm'));
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->redirect('/');
    }
}