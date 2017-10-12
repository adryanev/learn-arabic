<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
/**
 * This is the model class for table "materi_detail".
 *
 * @property integer $idMateriDetail
 * @property integer $idMateri
 * @property string $isi
 * @property string $gambar
 * @property string $terjemahan
 *
 * @property Materi $idMateri0
 */
class MateriDetail extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
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
            [['idMateri', 'isi', 'gambar', 'terjemahan'], 'required'],
            [['idMateri'], 'integer'],
            [['isi', 'terjemahan'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty'=>false, 'extensions' => 'png, jpg'],
            [['gambar'], 'string', 'max' => 255],
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
            'idMateri' => 'Id Materi',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'terjemahan' => 'Terjemahan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMateri0()
    {
        return $this->hasOne(Materi::className(), ['idMateri' => 'idMateri']);
    }

    /**
     * Mendapatkan Semua Materi detail dengan idMateri tertentu.
     * @param $id
     * @return MateriDetail[]|array|\yii\db\ActiveRecord[]
     */
    public function getMateriDetailByIdMateri($id){
        return MateriDetail::find()->andWhere(['idMateri'=>$id])->all();
    }

    /**
     * Mendapatkan semua detail materi.
     * @return MateriDetail[]|array|\yii\db\ActiveRecord[]
     */
    public function getAllMateriDetail(){
        return MateriDetail::find()->all();
    }
    public function upload(){
        if($this->validate()){
            $this->imageFile->saveAs('uploads/images/'.$this->imageFile->baseName.'.'.$this->imageFile->extension);
            return true;
        }else{
            return false;
        }
    }

    public function getByIdMateri($idMateri){
        $query = MateriDetail::find();

        $dataProvider = new ActiveDataProvider([
            'query'=> $query
        ]);

        $query->andFilterWhere(['idMateri'=>$idMateri]);

        return $dataProvider;
    }
}
