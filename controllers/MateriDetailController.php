<?php

namespace app\controllers;

use app\models\Materi;
use app\models\SubMateri;
use Yii;
use app\models\MateriDetail;
use app\models\MateriDetailSearch;
use yii\data\SqlDataProvider;
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

        if($model->load($data)){
            if($model->gambar!=NULL){
                $model->gambar->saveAs(Yii::$app->basePath.'/web/uploads/images/' . $model->gambar->baseName . '.' . $model->gambar->extension);
            }
            else{
                $model->gambar = null;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->idMateriDetail]);
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
        $gambarSekarang = $model->gambar;
        $data = Yii::$app->request->post();

        if($model->gambar != NULL) $data['MateriDetail']['gambar'] = $model->gambar;
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
            return $this->redirect(['view', 'id' => $model->idMateriDetail]);

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

    public function actionMateriDetail($idSubMateri){
        $query = "select materi_detail.idMateriDetail as id,materi_detail.idSubMateri, materi.namaMateri, kategori.namaKategori, materi_detail.isi, materi_detail.gambar, materi_detail.terjemahan, materi_detail.timestamp
from materi_detail 
INNER join sub_materi on materi_detail.idSubMateri = sub_materi.idSubMateri 
INNER JOIN materi on sub_materi.idMateri = materi.idMateri 
inner join kategori on sub_materi.idKategori = kategori.idKategori
where materi_detail.idSubMateri = ".$idSubMateri;


        $dataProvider = new SqlDataProvider([
            'sql' => $query,
            'key' => 'id',
                    ]);
        
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}
