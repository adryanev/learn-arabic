<?php

namespace app\controllers;

use Yii;
use app\models\SubMateri;
use app\models\SubMateriSearch;
use yii\data\ArrayDataProvider;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubMateriController implements the CRUD actions for SubMateri model.
 */
class SubMateriController extends Controller
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

    public function beforeAction($action) { $this->enableCsrfValidation = false; return parent::beforeAction($action); }

    /**
     * Lists all SubMateri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubMateriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubMateri model.
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
     * Creates a new SubMateri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubMateri();

        $post = Yii::$app->request->post();
        if (!empty($post)) {
            $materiMap = $post['SubMateri']['idMateri'];
            $kategoriMap = $post['SubMateri']['idKategori'];

            if(!empty($materiMap)&& !empty($kategoriMap)){


                $model->idMateri = $materiMap;
                $model->idKategori = $kategoriMap;
                $model->save(false);
            }

            return $this->redirect(['view', 'id' => $model->idSubMateri]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SubMateri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idSubMateri]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SubMateri model.
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
     * Finds the SubMateri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SubMateri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SubMateri::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSubMateri($idMateri){

        $query = "SELECT sub_materi.idSubMateri as id, sub_materi.idMateri, materi.namaMateri,sub_materi.idKategori, kategori.namaKategori,sub_materi.timestamp FROM sub_materi
INNER join materi on sub_materi.idMateri = materi.idMateri
INNER join kategori on sub_materi.idKategori = kategori.idKategori
where sub_materi.idMateri = ". $idMateri;

        $dataProvider = new SqlDataProvider([
            'sql' => $query,
            'key'=>'id',
        ]);

        //$rows = SubMateri::getSubMateriByidMateri($idMateri);


        return $this->render('index' ,['dataProvider'=>$dataProvider]);
    }

    public function actionKategori(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['idMateri'])) {
            $parents = $_POST['idMateri'];
            if ($parents != null) {
                $idMateri = $parents[0];
                $out = self::getKategoryList($idMateri);
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]

                return ['output'=>$out, 'selected'=>''];

            }
        }
       return Json::encode(['output'=>'', 'selected'=>'']);
    }

    public static function getKategoryList($idMateri){

        $query = "SELECT kategori.idKategori as id, kategori.namaKategori as name FROM sub_materi 
INNER join materi on sub_materi.idMateri = materi.idMateri 
INNER join kategori on sub_materi.idKategori = kategori.idKategori 
where sub_materi.idMateri = ".$idMateri;

        $data = Yii::$app->db->createCommand($query)->queryAll();

            $dataArray = ArrayHelper::toArray($data);

        return $dataArray;

    }

    public function actionIdSubMateri(){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        $idMateri = $_POST['idMateri'];
        $idKategori = $_POST['idKategori'];

        $out = SubMateri::getIdSubMateriFromInput($idMateri,$idKategori);

        return $out;

    }

}
