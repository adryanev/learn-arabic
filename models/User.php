<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $idUser
 * @property string $username
 * @property string $nama
 * @property string $email
 * @property string $authKey
 * @property string $accessToken
 * @property string $password
 * @property string $tanggalLahir
 * @property integer $status
 * @property integer $createdAt
 * @property integer $updatedAt
 *
 * @property Ujian[] $ujians
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nama', 'email', 'authKey', 'accessToken', 'password', 'tanggalLahir', 'status', 'createdAt', 'updatedAt'], 'required'],
            [['tanggalLahir'], 'safe'],
            [['status', 'createdAt', 'updatedAt'], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 80],
            [['authKey'], 'string', 'max' => 32],
            [['accessToken'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'username' => 'Username',
            'nama' => 'Nama',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'password' => 'Password',
            'tanggalLahir' => 'Tanggal Lahir',
            'status' => 'Status',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUjians()
    {
        return $this->hasMany(Ujian::className(), ['idUser' => 'idUser']);
    }
}
