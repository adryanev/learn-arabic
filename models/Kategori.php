<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $idKategori
 * @property string $namaKategori
 *
 * @property Materi[] $materis
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['idKategori' => 'idKategori']);
    }
}
