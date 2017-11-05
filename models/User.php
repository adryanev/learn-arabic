<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

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
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property Ujian[] $ujians
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;

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
            [['tanggalLahir', 'createdAt', 'updatedAt'], 'safe'],
            [['status',], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['username','email'],'unique','message' => 'Sudah digunakan.'],
            [['nama'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 80],
            [['authKey'], 'string', 'max' => 32],
            [['accessToken'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 64],
            [['tanggalLahir', 'createdAt', 'updatedAt'], 'string','max' => 10],
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

    public static function findByUsername($username){
        return static::findOne(['username'=>$username, 'status' =>self::STATUS_ACTIVE]);
    }

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() == $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */

    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password,$this->password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */

    public function setPassword($password){
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates 'Remember Me' Authentication Key
     */
    public function generateAuthKey(){
        $this->authKey = Yii::$app->security->generateRandomString();

    }
    public function generateAccessToken(){
        $this->accessToken = Yii::$app->security->generateRandomString($length = 255);
    }

}
