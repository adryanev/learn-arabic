<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soal".
 *
 * @property integer $idSoal
 * @property string $soal
 * @property string $a
 * @property string $b
 * @property string $c
 * @property string $d
 * @property string $jawaban
 */
class Soal extends \yii\db\ActiveRecord
{
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
            'soal' => 'Soal',
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
            'jawaban' => 'Jawaban',
        ];
    }
}
