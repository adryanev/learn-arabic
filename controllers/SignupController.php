<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 29/09/17
 * Time: 16:45
 */

namespace app\controllers;

use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class SignupController extends Controller
{

    /*
    public function behaviors()
    {
        return[
            'access'=>[
                'class'=>AccessControl::className(),
                'only' => ['signup'],
                'rules' => [
                    'actions' =>['signup'],
                    'allow' => true,
                    'roles' => ['?'],
                ],

            ],
            'verbs' =>[
                'class'=>VerbFilter::className(),
                'actions' => [
                    'signup' => ['post'],
                ],
            ],
        ];
    }

    */
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Display Signup Page
     */

    public function actionIndex(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = '//main-signup';
        $model = new SignupForm();
        if($model->load(Yii::$app->request->post()) && $model->signup()){
            return $this->goBack();
        }

        return $this->render('/signup/signup',['model'=>$model]);
    }

    public function actionSignup(){

        if(Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = new SignupForm();
        if($model->load(Yii::$app->request->post()) && $model->signup()){return $this->goBack();
        }
        return $this->render('/signup/signup',[
            'model'=>$model
        ]);

    }
}
