<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 10/5/2017
 * Time: 11:30 PM
 */

namespace app\api\modules\v1\controllers;


use app\models\Soal;
use yii\rest\Controller;

class SoalController extends Controller
{

    public function actionIndex(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if(\Yii::$app->request->isGet){
            $response['master'] = Soal::find()->all();
        }
        return $response;
    }

    public function actionLimit($by){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new Soal();
            $response = null;
        if(\Yii::$app->request->isGet){
            $response['master'] = $model->getSoalLimit($by);
        }
        return $response;

    }
}