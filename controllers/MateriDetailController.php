<?php

namespace app\controllers;

use app\models\Materi;
use Yii;
use app\models\MateriDetail;
use app\models\MateriDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MateriDetailController implements the CRUD actions for MateriDetail model.
 */
class MateriDetailController extends Controller
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
     * Lists all MateriDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MateriDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MateriDetail model.
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
     * Creates a new MateriDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MateriDetail();


        $data = Yii::$app->request->post();
        $model->gambar =UploadedFile::getInstance($model,'gambar');
        if($model->gambar != NULL) $data['MateriDetail']['gambar'] = $model->gambar;

        if($model->load($data) && $model->save()){
            $model->gambar->saveAs(Yii::$app->basePath.'/web/uploads/images/' . $model->gambar->baseName . '.' . $model->gambar->extension);
            return $this->redirect(['view', 'id' => $model->idSoal]);
        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MateriDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $data = Yii::$app->request->post();
        $model->gambar =UploadedFile::getInstance($model,'gambar');
        if($model->gambar != NULL) $data['MateriDetail']['gambar'] = $model->gambar;

        if($model->load($data) && $model->save()){

            if($data['MateriDetail']['gambar'] != NULL){
                $model->gambar->saveAs(Yii::$app->basePath.'/web/uploads/images/' . $model->gambar->baseName . '.' . $model->gambar->extension);
            }

            return $this->redirect(['view', 'id' => $model->idSoal]);

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MateriDetail model.
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
     * Finds the MateriDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MateriDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MateriDetail::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionDetail($idMateri,$idKategori){

        $query = Yii::$app->db->createCommand("SELECT materi_detail.idMateriDetail, materi.namaMateri, kategori.namaKategori, materi_detail.isi,materi_detail.gambar,materi_detail.terjemahan,materi_detail.timestamp FROM materi_detail inner JOIN materi inner JOIN kategori On materi_detail.idMateri = materi.idMateri and materi_detail.idKategori = kategori.idKategori
WHERE materi_detail.idMateri =".$idMateri."  and materi_detail.idKategori =".$idKategori)->queryAll();
        $dataProvider = $query;

        return $this->render('index',['dataProvider'=>$dataProvider]);

    }
}
