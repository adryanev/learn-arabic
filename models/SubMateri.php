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


    public static function getSubMateriByidMateri($idMateri){

        $connection =Yii::$app->getDb();
        $query = "SELECT sub_materi.idSubMateri,sub_materi.idMateri, materi.namaMateri,sub_materi.idKategori, kategori.namaKategori,sub_materi.timestamp FROM sub_materi
INNER join materi on sub_materi.idMateri = materi.idMateri
INNER join kategori on sub_materi.idKategori = kategori.idKategori
where sub_materi.idMateri = ". $idMateri;
        $command =  $connection->createCommand($query);
      //  $rows = (new yii\db\Query())->select(['sub_materi.idSubmateri','materi.namaMateri','materi.namaMateri','materi.namaMateri',
      //      'sub_materi.idKategori','kategori.namaKategori','sub_materi.timestamp'])->from('sub_materi')->innerJoin('materi')->innerJoin('kategori')->where(['sub_materi.idMateri'=>$idMateri])->all();
        $result = $command->queryAll();
        return $result;

    }
}
