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
class AdminController extends Controller
{

    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        if (  Yii::$app->user->isGuest || Yii::$app->user->identity->role == "Клиент" ){
            $this->redirect(['/']);
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
        return $this->render('index');
    }

}