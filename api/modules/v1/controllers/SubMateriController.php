<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 21/10/17
 * Time: 23:21
 */

namespace app\api\modules\v1\controllers;


use app\models\Kategori;
use app\models\SubMateri;
use yii\rest\Controller;

class SubMateriController extends Controller
{

    public function actionIndex(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if(\Yii::$app->request->isGet){
            $data = SubMateri::find()->all();
            $response['master'] = $data;
        }
        return $response;

    }
    public function actionByMateri($idMateri){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $response = null;
        if(\Yii::$app->request->isGet){
            $data = SubMateri::find()->where(['idMateri'=>$idMateri])->all();
            $response['master'] = $data;
        }
        return $response;
    }
    public function actionDepMateri($idMateri){

     $countSubMateri = SubMateri::find()->where(['idMateri'=>$idMateri])->count();
        $subMateri = SubMateri::find()->where(['idMateri'=>$idMateri])->all();

        if($countSubMateri>0){
          foreach($subMateri as $sub){
                $kategori = Kategori::find()->select('namaKategori')->where(['idKategori'=>$sub->idKategori])->all();
                   echo "<option value = ".$sub->idKategori." >".$kategori."</option>";
          }

         }
         else{
            echo "<option>-</option>";
         }
    }
}