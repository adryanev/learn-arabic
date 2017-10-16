<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property integer $idMateri
 * @property string $namaMateri
 * @property string $idKategori
 * @property string $timestamp
 *
 * @property MateriDetail[] $materiDetails
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
            [['namaMateri', 'idKategori'], 'required'],
            [['namaMateri', 'idKategori'], 'string'],
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
            'idKategori' => 'Id Kategori',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriDetails()
    {
        return $this->hasMany(MateriDetail::className(), ['idMateri' => 'idMateri']);
    }
}
