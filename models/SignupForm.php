<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 29/09/17
 * Time: 14:55
 */

namespace app\models;


use yii\base\Model;

class SignupForm extends Model
{

    public $username;
    public $nama;
    public $email;
    public $password;

    public function rules()
    {
        return [

            ['username','trim'],
            ['username','required','message' => 'Masukkan username yang diinginkan'],
            ['username','unique','targetClass' => 'app\models\Admin','message' => 'Username sudah digunakan.'],
            ['username','string','min' => 4,'max' => 20],

            ['nama','trim'],
            ['nama','required','message' => 'Masukkan Nama Anda'],
            ['nama','string','min' => 4,'max' => 50],

            ['email','trim'],
            ['email','required','message' => 'Masukkan Email Anda'],
            ['email','email'],
            ['email','unique','targetClass' => 'app\models\Admin','message' => 'Email sudah digunakan.'],
            ['email','string','min' => 4,'max' => 80],

            ['password','required','message' => 'Masukkan Password Anda'],
            ['password','string','min' => 5]

        ];
    }

    public function signup(){

        if(!$this->validate()){
            return null;
        }

        $admin = new Admin();
        $admin->username = $this->username;
        $admin->nama = $this->nama;
        $admin->email = $this->email;
        $admin->setPassword($this->password);
        $admin->generateAuthKey();
        $admin->generateAccessToken();
        $admin->createdAt = date('Y-m-d');

        return $admin->save() ? $admin : null;

    }
}