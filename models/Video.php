<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $idVideo
 * @property string $idYoutubeVideo
 * @property string $namaVideo
 * @property string $timestamp
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idYoutubeVideo', 'namaVideo'], 'required'],
            [['namaVideo'], 'string'],
            [['timestamp'], 'safe'],
            [['idYoutubeVideo'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idVideo' => 'Id Video',
            'idYoutubeVideo' => 'Id Youtube Video',
            'namaVideo' => 'Nama Video',
            'timestamp' => 'Timestamp',
        ];
    }
}
