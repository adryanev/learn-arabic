<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 10/6/2017
 * Time: 1:09 PM
 */

namespace app\models;


use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{

    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty'=>false, 'extensions' => 'png, jpg']
        ];
    }

    public function upload(){
        if($this->validate()){
            $this->imageFile->saveAs('uploads/images/'.$this->imageFile->baseName.'.'.$this->imageFile->extension);
            return true;
        }else{
            return false;
        }
    }
}