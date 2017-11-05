<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waktu".
 *
 * @property integer $idWaktu
 * @property string $namaWaktu
 * @property string $durasiWaktu
 *
 * @property Ujian[] $ujians
 */
class Waktu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'waktu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaWaktu', 'durasiWaktu'], 'required'],
            [['durasiWaktu'], 'safe'],
            [['namaWaktu'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWaktu' => 'Id Waktu',
            'namaWaktu' => 'Nama Waktu',
            'durasiWaktu' => 'Durasi Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUjians()
    {
        return $this->hasMany(Ujian::className(), ['idWaktu' => 'idWaktu']);
    }
}
