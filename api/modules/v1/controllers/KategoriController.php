<?php
namespace app\api\modules\v1\controllers;

use app\models\Kategori;
use yii\rest\Controller;
use Yii;

class KategoriController extends Controller{

  public function actionIndex(){

    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $response = null;

    if(Yii::$app->request->isGet){

      $response['master'] = Kategori::find()->all();
    }
    return $response;
  }

  public function actionSelect($id){

    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $response = null;

    if(Yii::$app->request->isGet)
    {
      $response['master'] = Kategori::find()->where(['idKategori'=>$id])->all();
    }
    return $response;
  }
}
