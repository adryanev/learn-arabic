<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/10/17
 * Time: 22:37
 */

namespace app\api\modules\v1\controllers;

use app\models\Materi;
use yii\rest\Controller;

class MateriController extends Controller
{

    public function actionIndex(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = Materi::find()->all();

        return $response;
    }

    public function actionDetail($idMateri){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = Materi::find()->where(['idMateri'=>$idMateri])->all();

        return $response;
    }
}