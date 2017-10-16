<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ujian".
 *
 * @property integer $idUjian
 * @property integer $idUser
 * @property string $tglUjian
 * @property integer $totalSkor
 * @property integer $idWaktu
 *
 * @property User $idUser0
 * @property Waktu $idWaktu0
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
            [['idUser', 'tglUjian', 'totalSkor', 'idWaktu'], 'required'],
            [['idUser', 'totalSkor', 'idWaktu'], 'integer'],
            [['tglUjian'], 'safe'],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'idUser']],
            [['idWaktu'], 'exist', 'skipOnError' => true, 'targetClass' => Waktu::className(), 'targetAttribute' => ['idWaktu' => 'idWaktu']],
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
            'tglUjian' => 'Tgl Ujian',
            'totalSkor' => 'Total Skor',
            'idWaktu' => 'Id Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['idUser' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWaktu0()
    {
        return $this->hasOne(Waktu::className(), ['idWaktu' => 'idWaktu']);
    }
}
