<?php

namespace app\controllers;

use app\models\Category;
use app\models\ProductCreateForm;
use app\models\Products;
use app\models\ProductsSearch;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Products models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ProductCreateForm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->image = UploadedFile::getInstance($model, 'image');
                $newFileName =  md5($model->image->baseName . '.' . $model->image->extension. time()). '.' . $model->image->extension;
                $model->image->saveAs('images/' . $newFileName);
                $model->image = '/images/' .$newFileName;

                $model->file = UploadedFile::getInstance($model, 'file');
                $newFileName =  md5($model->file->baseName . '.' . $model->file->extension. time()). '.' . $model->file->extension;
                $model->file->saveAs('file/' . $newFileName);
                $model->file = '/file/' .$newFileName;

                $model->statusDescription = 0;


                $model->save();

                //$this->generateXml($model,Yii::$app->user->identity);
                Yii::$app->session->setFlash('success', 'Книга успешно добавлена!');
                return $this->redirect(['/site/shop']);

            }
        } else {
            $model->loadDefaultValues();
        }

        $categories = Category::find()->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');
        return $this->render('create', [
            'model' => $model,
            'categories' => $categories,
        ]);
    }

    /*public function actionCreates()
    {
        $model = new ProductCreateForm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->image = UploadedFile::getInstance($model, 'image');
                $newFileName =  md5($model->image->baseName . '.' . $model->image->extension. time()). '.' . $model->image->extension;
                $model->image->saveAs('images/' . $newFileName);
                $model->image = '/images/' .$newFileName;
                $model->save();

                $this->generateXml($model,Yii::$app->user->identity);

                return $this->redirect(['/site/shop']);
            }
        } else {
            $model->loadDefaultValues();
        }

        $categories = Category::find()->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');
        return $this->render('creates', [
            'model' => $model,
            'categories' => $categories,
        ]);
    }*/

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    private function generateXml($product, $user)
    {
        $__user = Yii::$app->user->identity;
        $xml = <<<_XML
<?xml version="1.0" encoding="UTF-8"?>
<root>
    <product>
        <id>{$product->id}</id>
        <name>{$product->name}</name>
        <description>{$product->description}</description>
        <atrikul>{$product->atribut}</atrikul>
        <year>{$product->year}</year>
        <author>
            <id>{$__user->id}</id>
            <fio>{$__user->fio}</fio>
            <inn>{$__user->inn}</inn>
            <kpp>{$__user->kpp}</kpp>
            <email>{$__user->email}</email>
            <address>{$__user->address}</address>
        </author>
        <pictype>{$product->image}</pictype>
        <file>{$product->file}</file>
        <status>{$product->status}</status>
        <statusDescription>{$product->statusDescription}</statusDescription>
    </product>
</root>
_XML;
        file_put_contents(Yii::getAlias('@app/import/site/'.time().uniqid().'.xml'), $xml);
    }

}
