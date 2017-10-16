<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi_detail".
 *
 * @property integer $idMateriDetail
 * @property integer $idKategori
 * @property integer $idMateri
 * @property string $isi
 * @property string $gambar
 * @property string $terjemahan
 * @property string $timestamp
 *
 * @property Kategori $idKategori0
 * @property Materi $idMateri0
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
            [['idKategori', 'idMateri', 'isi'], 'required'],
            [['idKategori', 'idMateri'], 'integer'],
            [['isi', 'terjemahan'], 'string'],
            [['terjemahan','gambar','timestamp'], 'safe'],
            [['gambar'] ,'file' ,'skipOnEmpty' => TRUE],
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
            'idMateriDetail' => 'Id Materi Detail',
            'idKategori' => 'Id Kategori',
            'idMateri' => 'Id Materi',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'terjemahan' => 'Terjemahan',
            'timestamp' => 'Timestamp',
        ];
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

    public static function findMateri($idMateri,$idKategori){
        $data = MateriDetail::find()->where(['idMateri' => $idMateri])->andWhere(['idKategori'=>$idKategori]);
        return $data;
    }
}
