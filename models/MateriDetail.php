<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi_detail".
 *
 * @property integer $idMateriDetail
 * @property integer $idSubMateri
 * @property string $isi
 * @property string $gambar
 * @property string $terjemahan
 * @property string $timestamp
 *
 * @property SubMateri $idSubMateri0
 */
class MateriDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materi_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSubMateri', 'isi', 'terjemahan'], 'required'],
            [['idSubMateri'], 'integer'],
            [['isi', 'terjemahan'], 'string'],
            [['timestamp'], 'safe'],
            [['gambar'] ,'file' ,'skipOnEmpty' => TRUE],
            [['idSubMateri'], 'exist', 'skipOnError' => true, 'targetClass' => SubMateri::className(), 'targetAttribute' => ['idSubMateri' => 'idSubMateri']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMateriDetail' => 'Id Materi Detail',
            'idSubMateri' => 'Id Sub Materi',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'terjemahan' => 'Terjemahan',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubMateri0()
    {
        return $this->hasOne(SubMateri::className(), ['idSubMateri' => 'idSubMateri']);
    }
}
