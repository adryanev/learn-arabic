<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/10/17
 * Time: 22:42
 */

namespace app\api\modules\v1\controllers;

use app\models\MateriDetail;
use yii\rest\Controller;

class MateriDetailController extends Controller
{


    public function actionDetail($idMateri){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response['master'] = MateriDetail::find()->where(['idMateri'=>$idMateri])->all();

        return $response;
    }
	
	public function actionIndex(){
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$response['master'] = MateriDetail::find()->all();
		
		return $response;
	}

}