<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use backend\models\Category;
use backend\models\Factory;
use backend\models\Size;
use backend\models\Color;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $modelCate = new Category();
        $modelFactory = new Factory();
        $modelColor = new Color();
        $modelSize = new Size();
        $dataCate = $modelCate->getCategoryParent();
        $dataFactory = ArrayHelper::map($modelFactory->getAllFactory(),"factory_id","factory_name");
        $dataColor = ArrayHelper::map($modelColor->getAllColor(),"color_id","color_name");
        $dataSize = ArrayHelper::map($modelSize->getAllSize(),"size_id","size_name");

        if ($model->load(Yii::$app->request->post())){ 
            $time = time();
            $model->created_at = $time;
            $model->updated_at = $time;

            $model->size_id = serialize($model->size_id) ;
            $model->color_id = serialize($model->color_id) ;
            $model->save();
            return $this->redirect('index');
        } else {
            return $this->render('create', [
                'model' => $model,
                'dataCate' => $dataCate,
                'dataFactory' => $dataFactory,
                'dataSize' =>$dataSize,
                'dataColor' =>$dataColor,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelCate = new Category();
        $modelFactory = new Factory();
        $modelColor = new Color();
        $modelSize = new Size();
        $dataCate = $modelCate->getCategoryParent();
        $dataFactory = ArrayHelper::map($modelFactory->getAllFactory(),"factory_id","factory_name");
        $dataColor = ArrayHelper::map($modelColor->getAllColor(),"color_id","color_name");
        $dataSize = ArrayHelper::map($modelSize->getAllSize(),"size_id","size_name");

        if ($model->load(Yii::$app->request->post())) {
           
            $time = time();
            $model->created_at = $time;
            $model->updated_at = $time;

            $model->size_id = serialize($model->size_id) ;
            $model->color_id = serialize($model->color_id) ;
            $model->save();
            
            return $this->redirect('index');
        } else {
            return $this->render('update', [
                'model' => $model,
                'dataCate' => $dataCate,
                'dataFactory' => $dataFactory,
                'dataSize' =>$dataSize,
                'dataColor' =>$dataColor,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
