<?php

namespace app\controllers;

use app\models\Orders;
use yii\web\UploadedFile;
use app\models\Users;
use app\models\Category;
use app\models\Posts;
use app\models\RegForm;
use app\models\UsersSearch;
use app\models\PostsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * UserController implements the CRUD actions for User model.
 */
class LkController extends Controller
{

    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        if (Yii::$app->user->isGuest){
            $this->redirect(['/site/login']);
            return false;

        }
        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }

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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $orders = Orders::find()->where(['id_user'=>Yii::$app->user->identity->id])->all();
        return $this->render('index',['orders'=>$orders]);

        /*$searchModel = new ProblemSearch();
        $dataProvider = $searchModel->searchForUser($this->request->queryParams, Yii::$app->user->identity->id);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }



    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        /*if($this->findModel($id)->status == '??????????'){
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', '???????????? ?????????????? ??????????????');
        } else {
            Yii::$app->session->setFlash('danger', '???????????? ???? ?????????? ???????? ?????????????? ?????? ?????? ???? ???????????? ?????? ?????????????? ??????????????????????????????');
        }

        return $this->redirect(['index']);*/
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        /*if (($model = Problem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');*/
    }


    public function actionCreate()
    {
        /*$model = new ProblemCreateForm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->image = UploadedFile::getInstance($model, 'image');
                $newFileName =  md5($model->image->baseName . '.' . $model->image->extension. time()). '.' . $model->image->extension;
                $model->image->saveAs('uploads/' . $newFileName);
                $model->image = $newFileName;
                $model->idUser = Yii::$app->user->identity->id;
                $model->save();
                return $this->redirect(['/lk']);
            }
        } else {
            $model->loadDefaultValues();
        }

        $categories = Category::find()->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');
        return $this->render('create', [
            'model' => $model,
            'categories' => $categories,
        ]);*/
    }
}