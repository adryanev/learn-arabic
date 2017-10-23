<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\MateriDetail */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Materi Detail</h4>
    </div>

    <?php
    $materis = \app\models\Materi::find()->asArray()->all();
    $materiMap = \yii\helpers\ArrayHelper::map($materis,'idMateri','namaMateri');
    $kategoris = \app\models\Kategori::find()->asArray()->all();
    $kategoriMap = \yii\helpers\ArrayHelper::map($kategoris,'idKategori','namaKategori');
    ?>
        <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
        <div class="card-content table-responsive">
           <?=
             \kartik\select2\Select2::widget([
                'id' => 'idMateri',
                 'name' => 'idMateri',
                'data' => $materiMap,
                'options' => [
                    'placeholder' => 'Pilih Materi',
                ],
            ]);
            ?>


           <?=
           \kartik\select2\Select2::widget([
               'id' => 'idKategori',
               'name' => 'idKategori',
               'data' => $kategoriMap,
               'options' => [
                   'placeholder' => 'Pilih kategori',
               ],
           ]);
           ?>

            <?= $form->field($model, 'idSubMateri')->textInput(['readonly'=>true]) ?>

        <?= $form->field($model, 'isi')->widget(Redactor::className(),[
                'settings' => [
                    'lang' => 'id',
                    'minHeight'=>'200',
                    'plugins'=>[
                        'clips',
                        'fullscreen',
                    ]
                ]
            ]) ?>
        <?= $form->field($model, 'gambar')->widget(FileInput::className(),[
                'options'=>['accept'=>'image/*']
            ]) ?>

        <?= $form->field($model, 'terjemahan')->widget(Redactor::className(),
                [
                    'settings' => [
                        'lang' => 'id',
                        'minHeight'=>'200',
                        'plugins'=>[
                            'clips',
                            'fullscreen',
                        ]
                    ]
                ]) ?>

            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

<?php

$this->registerJs("

    $(document).ready(function(){
    
    var idmat = 0;
    var idkat = 0;
   
        $('select#idMateri').change(function(){
            idmat = $(this).val();
            
        });
        $('select#idKategori').change(function(){
            idkat = $(this).val();
             var sendInfo = {
             idMateri: idmat,
             idKategori: idkat};
             
             $.ajax({
                type: 'POST',
                data: sendInfo,
                url: '/learn-arabic/web/sub-materi/id-sub-materi',
                contentType:'application/x-www-form-urlencoded',
                success: function(response){
                    console.log(response);
                    console.log(JSON.stringify(response));
                    $('#materidetail-idsubmateri').val(response[0].idSubMateri);
                },
                
                
             
             });
        });
      
    
});


");
