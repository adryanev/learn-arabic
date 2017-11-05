<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header" data-background-color="purple">
       <h4 class="title">Video</h4>
    </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="card-content table-responsive">
            <?= Html::label('Url Youtube','',['class'=>'control-label']) ?>
            <?= Html::textInput('url','',['class'=>'form-control','id'=>'url'])?>
        <?= $form->field($model, 'idYoutubeVideo')->textInput(['readonly'=>true]) ?>

        <?= $form->field($model, 'namaVideo')->textInput() ?>

            <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

<?php

$this->registerJs("

    $(document).ready(function(){
    
    var url = null;
    
    
        $('input#url').change(function(){
            url = $(this).val();
             var sendInfo = {
             'url': url
             };
             
             $.ajax({
                type: 'POST',
                data: sendInfo,
                url: '/learn-arabic/web/video/youtube-id',
                contentType:'application/x-www-form-urlencoded',
                success: function(response){
                    console.log(response);
                    console.log(JSON.stringify(response));
                    $('#video-idyoutubevideo').val(response);
                },
                
                
             
             });
        });
      
    
});


");
