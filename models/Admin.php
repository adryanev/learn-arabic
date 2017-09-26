<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $idAdmin
 * @property string $username
 * @property integer $nama
 * @property integer $email
 * @property integer $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nama', 'email', 'password'], 'required'],
            [['nama', 'email', 'password'], 'integer'],
            [['username'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAdmin' => 'Id Admin',
            'username' => 'Username',
            'nama' => 'Nama',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }


}
