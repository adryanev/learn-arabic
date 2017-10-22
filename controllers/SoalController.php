<?php

namespace app\controllers;

use Yii;
use app\models\Soal;
use app\models\SoalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SoalController implements the CRUD actions for Soal model.
 */
class SoalController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Soal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SoalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Soal model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Soal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Soal();


        $data = Yii::$app->request->post();
        $model->gambar =UploadedFile::getInstance($model,'gambar');
        if($model->gambar != NULL) $data['Soal']['gambar'] = $model->gambar;
        if($model->gambar == NULL) $data['Soal']['gambar'] = null;

        if($model->load($data) && $model->save()){
            if($model->gambar!=NULL){
                $model->gambar->saveAs(Yii::$app->basePath.'/web/uploads/images/' . $model->gambar->baseName . '.' . $model->gambar->extension);
            }
            return $this->redirect(['view', 'id' => $model->idSoal]);
        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Soal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update-photo-upload';
        $gambarSekarang = $model->gambar;
        $data = Yii::$app->request->post();

        if($model->gambar != NULL) $data['Soal']['gambar'] = $model->gambar;
        if($model->load($data)){

            $gambar = UploadedFile::getInstance($model,'gambar');

            if(!empty($gambar) && $gambar->size!=0 ) {

                    $gambar->saveAs(Yii::$app->basePath . '/web/uploads/images/' . $gambar->baseName . '.' . $gambar->extension);
                    $model->gambar = $gambar->baseName . '.' . $gambar->extension;
            }
            else{
               $model->gambar = $gambarSekarang;
            }
            $model->timestamp = date('Y-m-d h:i:s');
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->idSoal]);

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Soal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Soal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Soal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Soal::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
