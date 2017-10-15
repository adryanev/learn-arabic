<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 12/10/17
 * Time: 13:08
 */

namespace app\api\modules\v1\controllers;
use app\models\User;
use yii\rest\Controller;

class RegisterController extends Controller
{

    public function actionRegisterUser(){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $response = null;
        if(\Yii::$app->request->isPost){
            $data = \Yii::$app->request->post();
            $user = new User();
            $user->username =  $data['username'];
            $user->nama = $data['nama'];
            $user->email = $data['email'];
            $user->generateAuthKey();
            $user->generateAccessToken();
            $user->password = sha1($data['password']);
            $user->tanggalLahir = $data['tanggalLahir'];
            $user->status = User::STATUS_ACTIVE;
            $user->createdAt = date('Y-m-d');
            $user->updatedAt = date('Y-m-d');



            if($user->save()){
                $response['status'] = 'success';
            }else{

                $error = var_dump($user->save());
                $response['status'] = 'gagal menyimpan user: '.$error;
            }
        }

        return $response;
    }
}