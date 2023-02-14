<?php

namespace app\controllers;

use app\models\Carts;
use app\models\CartsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CartsController implements the CRUD actions for Carts model.
 */
class CartsController extends Controller
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
     * Lists all Carts models.
     *
     * @return string
     */
    public function actionIndex()
    {

        $searchModel = new CartsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $carts = (new Carts())->getCarts();
        return $this->render('index', [
            'carts'=> $carts,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAdd() {

        $carts = new Carts();

        /*
         * Данные должны приходить методом POST; если это не
         * так — просто показываем корзину
         */
        if (!Yii::$app->request->isPost) {
            return $this->redirect(['carts/index']);
        }

        $data = Yii::$app->request->post();
        if (!isset($data['id'])) {
            return $this->redirect(['carts/index']);
        }
        if (!isset($data['count'])) {
            $data['count'] = 1;
        }

        // добавляем товар в корзину и перенаправляем покупателя
        // на страницу корзины
        $carts->addTocarts($data['id'], $data['count']);

        return $this->redirect(['carts/index']);
    }

    public function actionRemove($id) {
        $basket = new Carts();
        $basket->removeFromCarts($id);
        return $this->redirect(['carts/index']);
    }

    /**
     * Displays a single Carts model.
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
     * Creates a new Carts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Carts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate() {
        $basket = new Carts();

        /*
         * Данные должны приходить методом POST; если это не
         * так — просто показываем корзину
         */
        if (!Yii::$app->request->isPost) {
            return $this->redirect(['carts/index']);
        }

        $data = Yii::$app->request->post();
        if (!isset($data['count'])) {
            return $this->redirect(['carts/index']);
        }
        if (!is_array($data['count'])) {
            return $this->redirect(['carts/index']);
        }

        $basket->updateCarts($data);

        return $this->redirect(['carts/index']);
    }


    /**
     * Updates an existing Carts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }*/

    /**
     * Deletes an existing Carts model.
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

    public function actionClear() {
        $basket = new Carts();
        $basket->clearCarts();
        return $this->redirect(['carts/index']);
    }






    /**
     * Finds the Carts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Carts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carts::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
