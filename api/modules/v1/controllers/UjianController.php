<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 10/6/2017
 * Time: 2:30 PM
 */

namespace app\api\modules\v1\controllers;

use app\models\Ujian;
use yii\rest\Controller;

class UjianController extends Controller
{

    public function actionIndex(){


        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if(\Yii::$app->request->isGet){
            $response['master'] = Ujian::find()->all();
        }
        return $response;
    }

    public function actionGetById($idUser){
        \Yii::$app->response->format  = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if(\Yii::$app->request->isGet){
            $response['master'] = Ujian::find()->where(['idUser'=> $idUser])->all();
        }

        return $response;
    }

    public function actionDetail($idUjian){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $response = null;

        if(\Yii::$app->request->isGet){
            $response['master'] = Ujian::find()->where(['idUjian' => $idUjian]);
        }


        return $response;
    }
    public function actionAdd(){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $response = null;

        if(\Yii::$app->request->isPost){
            $data = \Yii::$app->request->post();
            $model = new Ujian();
            $model->idUser = $data['idUser'];
            $model->tanggalUjian = date('Y-m-d');
            $model->totalSkor = $data['totalSkor'];

            if($model->save()){
                $response = 'OK';
            }
            else{
                $response = 'FAILED';
            }

        }

        return $response;
    }
}
