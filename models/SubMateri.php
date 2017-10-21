<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_materi".
 *
 * @property integer $idSubMateri
 * @property integer $idMateri
 * @property integer $idKategori
 * @property string $timestamp
 *
 * @property MateriDetail[] $materiDetails
 * @property Kategori $idKategori0
 * @property Materi $idMateri0
 */
class SubMateri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMateri', 'idKategori'], 'required'],
            [['idMateri', 'idKategori'], 'integer'],
            [['timestamp'], 'safe'],
            [['idKategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['idKategori' => 'idKategori']],
            [['idMateri'], 'exist', 'skipOnError' => true, 'targetClass' => Materi::className(), 'targetAttribute' => ['idMateri' => 'idMateri']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSubMateri' => 'Id Sub Materi',
            'idMateri' => 'Id Materi',
            'idKategori' => 'Id Kategori',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriDetails()
    {
        return $this->hasMany(MateriDetail::className(), ['idSubMateri' => 'idSubMateri']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategori0()
    {
        return $this->hasOne(Kategori::className(), ['idKategori' => 'idKategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMateri0()
    {
        return $this->hasOne(Materi::className(), ['idMateri' => 'idMateri']);
    }
}
