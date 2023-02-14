<?php

namespace app\controllers;

use app\models\Carts;
use app\models\Comments;
use app\models\Orders;
use app\models\Posts;
use app\models\Products;
use app\models\ProductsSearch;
use app\models\RegForm;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $product_pol = Products::find()->where(['id_category' => 3])->limit(6)->all();
        $product_pr_1 = Products::find()->where(['id' => [7, 8]])->all();
        $product_pr_2 = Products::find()->where(['id' => [9, 10]])->all();
        return $this->render('index', ['product_pr_1' => $product_pr_1, 'product_pr_2' => $product_pr_2, 'product_pol' => $product_pol]);
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        /*$model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);*/
        $modelReg = new RegForm();

        if ($this->request->isPost) {
            if ($modelReg->load($this->request->post()) && $modelReg->save()) {
                Yii::$app->user->login($modelReg);
                return $this->redirect(['/']);
            }
        } else {
            $modelReg->loadDefaultValues();
        }

        $modelLogin = new LoginForm();
        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            return $this->goBack();
        }
        $modelLogin->password = '';

        return $this->render('login', [
            'modelLogin' => $modelLogin,
            'modelReg' => $modelReg,
        ]);
    }


    public function actionLogin_pr()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        /*$model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);*/
        $modelReg = new RegForm();
        $modelReg->role = 'Предприниматель';
        if ($this->request->isPost) {
            if ($modelReg->load($this->request->post()) && $modelReg->save()) {
                Yii::$app->user->login($modelReg);
                return $this->redirect(['/']);
            }
        } else {
            $modelReg->loadDefaultValues();
        }

        $modelLogin = new LoginForm();
        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            return $this->goBack();
        }
        $modelLogin->password = '';

        return $this->render('login_pr', [
            'modelLogin' => $modelLogin,
            'modelReg' => $modelReg,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionShop()
    {
        $products = Products::find()->all();
        return $this->render('shop', compact('products'));
    }

    public function actionCart()
    {
        return $this->render('cart');
    }

    public function actionCart_like()
    {
        return $this->render('cart_like');
    }

    public function actionSingle_product()
    {
        $id = Yii::$app->request->getQueryParam('id');
        $product = Products::findOne($id);
        $comments = Comments::find()->where(['id_product' => $product->id])->all();
        $product_cat = Products::find()->where(['id_category' => $product->id_category])/*->where('not','id', $product->id)*/ ->all();
        return $this->render('single_product', ['product' => $product, 'product_cat' => $product_cat, 'comments' => $comments]);
    }
    public function actionShop_search()
    {

        /*$param = Yii::$app->request->getQueryParam('param');
        $arrparam[] = ['name' => $param];
        $products = ProductsSearch::search($arrparam)->all();*/
        $keyword = Yii::$app->request->get('keyword');
        $query = Products::find()->where(['like','name',$keyword]);
        $products = $query->all();

        //$products = Products::find()->where(['id'=>$product->id])->all();
        return $this->render('shop_search', ['products' => $products]);
    }
    public function actionBlog_details()
    {
        $id = Yii::$app->request->getQueryParam('id');
        $blog = Posts::findOne($id);


        return $this->render('blog_details', ['blog' => $blog]);
    }

    public function actionCheckout()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        } else {

            $carts = (new Carts())->getCarts();
            $model = new Orders();

            $model->date = date("Y.m.d");
            $model->over_price = Yii::$app->session['carts']['amount'];
            $count = 0;
            foreach ($carts['products'] as $item) {
                $count = $count + $item['count'];
            }
            $model->count = $count;
            $model->id_user = Yii::$app->user->identity->id;
            //$model->description = 'sdasd';




            if ($this->request->isPost) {

                //$model->count = $carts['count'];
                if ($model->load($this->request->post()) && $model->save()) {
                    $session = Yii::$app->session;
                    $session->open();
                    $session->set('carts', []);
                    return $this->redirect(['/']);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('checkout', ['carts' => $carts, 'model' => $model]);

        }
    }

}
