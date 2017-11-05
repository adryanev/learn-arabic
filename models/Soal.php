<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "soal".
 *
 * @property integer $idSoal
 * @property string gambar
 * @property string $soal
 * @property string $a
 * @property string $b
 * @property string $c
 * @property string $d
 * @property string $jawaban
 * @property string $timestamp
 */
class Soal extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soal', 'a', 'b', 'c', 'd', 'jawaban'], 'required'],
            [['soal'], 'string', 'max' => 100],
            [['timestamp'],'save'],
            [['timestamp'],'string'],
            [['gambar'], 'file','extensions' => 'png, jpg, jpeg, gif', 'maxFiles' => 1, 'skipOnEmpty' => true, 'on' => 'update-photo-upload'],
            [['a', 'b', 'c', 'd'], 'string', 'max' => 50],
            [['jawaban'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSoal' => 'Id Soal',
            'gambar' =>'Gambar',
            'soal' => 'Soal',
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
            'jawaban' => 'Jawaban',
            'timestamp'=>'Time Stamp',
        ];
    }

    public function getOptions(){
        return['','A','B','C','D'];
    }

    public function getSoalLimit($by){

        $soal = Soal::find()->limit($by)->all();

        return $soal;
    }

}
