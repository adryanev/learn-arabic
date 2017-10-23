<?php

namespace app\models;

use Yii;
use yii\data\SqlDataProvider;

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


    public static function getSubMateriByidMateri($idMateri){

        $query = "SELECT sub_materi.idSubMateri,sub_materi.idMateri, materi.namaMateri,sub_materi.idKategori, kategori.namaKategori,sub_materi.timestamp FROM sub_materi
INNER join materi on sub_materi.idMateri = materi.idMateri
INNER join kategori on sub_materi.idKategori = kategori.idKategori
where sub_materi.idMateri = ". $idMateri;

        $result = new SqlDataProvider(
            [
                'sql'=>$query
            ]
        );
        return $result;

    }

    public static function getKategori($idMateri){
        $data = self::find()->select(['idKategori'])
            ->joinWith('kategori')
            ->joinWith('materi')
            ->where(['idMateri'=>$idMateri])
            ->asArray()->all();
        return $data;
    }
    public static function getIdSubMateriFromInput($idMateri,$idKategori)
    {

        $data = SubMateri::find()->select(['idSubMateri'])->where(['idMateri' => $idMateri])->andWhere(['idKategori' => $idKategori])->all();

        return $data;
    }
}
