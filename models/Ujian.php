<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ujian".
 *
 * @property integer $idUjian
 * @property integer $idUser
 * @property string $tanggalUjian
 * @property integer $totalSkor
 *
 * @property User $idUser0
 */
class Ujian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ujian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUser', 'tanggalUjian', 'totalSkor'], 'required'],
            [['idUser', 'totalSkor'], 'integer'],
            [['tanggalUjian'], 'safe'],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'idUser']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUjian' => 'Id Ujian',
            'idUser' => 'Id User',
            'tanggalUjian' => 'Tanggal Ujian',
            'totalSkor' => 'Total Skor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['idUser' => 'idUser']);
    }
}
