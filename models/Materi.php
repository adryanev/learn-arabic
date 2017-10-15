<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "materi".
 *
 * @property integer $idMateri
 * @property string $namaMateri
 * @property integer $idKategori
 *
 * @property Kategori $idKategori0
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
            [['namaMateri'], 'required'],
            [['idKategori'], 'integer'],
            [['namaMateri'], 'string', 'max' => 100],
            [['idKategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['idKategori' => 'idKategori']],
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
    public function getMateriDetails()
    {
        return $this->hasMany(MateriDetail::className(), ['idMateri' => 'idMateri']);
    }

    public function getMateriByKategori($idKategori){

        $query = Materi::find()->where(['idKategori' =>$idKategori])->all();
        $dataProvider = $query;

        return $dataProvider;
    }
}
