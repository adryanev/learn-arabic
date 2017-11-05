<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property integer $idMateri
 * @property string $namaMateri
 * @property string $timestamp
 *
 * @property SubMateri[] $subMateris
 */
class Materi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaMateri'], 'required'],
            [['namaMateri'], 'string'],
            [['timestamp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMateri' => 'Id Materi',
            'namaMateri' => 'Nama Materi',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubMateris()
    {
        return $this->hasMany(SubMateri::className(), ['idMateri' => 'idMateri']);
    }
}
