<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $idKategori
 * @property string $namaKategori
 * @property string $timestamp
 *
 * @property MateriDetail[] $materiDetails
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaKategori'], 'required'],
            [['timestamp'], 'safe'],
            [['namaKategori'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKategori' => 'Id Kategori',
            'namaKategori' => 'Nama Kategori',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriDetails()
    {
        return $this->hasMany(MateriDetail::className(), ['idKategori' => 'idKategori']);
    }

}
