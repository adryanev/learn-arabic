<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 05/11/17
 * Time: 8:16
 */

namespace app\api\modules\v1\controllers;

use app\models\Video;
use yii\rest\Controller;
use Yii;
class VideoController extends Controller
{
    public function actionIndex(){
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if(Yii::$app->request->isGet){
            $response['master'] = Video::find()->all();
        }
        return $response;
    }


}