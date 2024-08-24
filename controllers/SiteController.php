<?php

namespace app\controllers;

use app\models\Carts;
use app\models\Comments;
use app\models\Orders;
use app\models\Posts;
use app\models\Products;
use app\models\ProductsOrder;
use app\models\ProductsSearch;
use app\models\RegForm;
use app\models\User;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\helpers\Url;

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
        $query_cat = Yii::$app->request->getQueryParam('cat_id');
        $query_search = Yii::$app->request->getQueryParam('keyword');

        if ($query_cat != null) {
            $products = Products::find()->where(['id_category' => $query_cat])->all();
            return $this->render('shop', compact('products'));


        } else if ($query_search != null) {
            $query = Products::find()->where(['like', 'name', $query_search]);
            $products = $query->all();
            return $this->render('shop', ['products' => $products]);
        } else {
            $products = Products::find()->all();
            return $this->render('shop', compact('products'));

        }
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
        $model = new Comments();
        if (!isset(Yii::$app->user->id)){
            $model->id_user = 0;
        }
        else{
            $model->id_user = Yii::$app->user->identity->id;
            $model->id_product = $id;
        }
        if ($model->load($this->request->post()) && $model->save()){
            return $this->redirect(Url::current(['id' => $product->id]));
            // return $this->redirect(['site/single_product', 'id' => $id]);
        }
        return $this->render('single_product', ['product' => $product, 'product_cat' => $product_cat, 'comments' => $comments, 'model'=>$model]);
    }

    public function actionShop_search()
    {

        /*$param = Yii::$app->request->getQueryParam('param');
        $arrparam[] = ['name' => $param];
        $products = ProductsSearch::search($arrparam)->all();*/
        $keyword = Yii::$app->request->get('keyword');
        $query = Products::find()->where(['like', 'name', $keyword]);
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

            $usr = Yii::$app->user->identity;





            $model->date = date("Y.m.d");
            $model->over_price = Yii::$app->session['carts']['amount'];
            $count = 0;
            foreach ($carts['products'] as $item) {
                $count = $count + $item['count'];
                /*$products_order->id_order = 2;
                $products_order->id_product = $item['id'];*/
            }



            $model->count = $count;
            $model->id_user = Yii::$app->user->identity->id;
            //$model->description = 'sdasd';


            if ($this->request->isPost) {

                //$model->count = $carts['count'];
                if ($model->load($this->request->post()) && $model->save() && $usr->load($this->request->post()) && $usr->save()) {
                    foreach ($carts['products'] as $item) {
                        $products_order = new ProductsOrder();
                        $products_order->id_order = $model->id;
                        $products_order->id_product = $item['id'];
                        $products_order->quantity = $item['count'];
                        $products_order->save();
                        /*if ($item['count'] == 1) {
                            $products_order = new ProductsOrder();
                            $products_order->id_order = $model->id;
                            $products_order->id_product = $item['id'];
                            $products_order->quantity = $item['count'];
                            $products_order->save();
                        }*/
                        /*else{
                            for ($i = 0; $i < $item['count']; $i++){
                                $products_order = new ProductsOrder();
                                $products_order->id_order = $model->id;
                                $products_order->id_product = $item['id'];
                                $products_order->save();
                            }
                        }*/

                    }

                    $user = Yii::$app->user->identity;
                    //$author = User::findIdentity();
                    $this->generateXml($model, $carts['products'], $user);
                    /*for ($i = $carts['products'];$count;){
                        $products_order->id_order = $model->id;
                        $products_order->id_product = $i->id;

                        $products_order->save();
                    }*/


                    $session = Yii::$app->session;
                    $session->open();
                    $session->set('carts', []);
                    Yii::$app->session->setFlash('success', 'Ваш заказ успешно оформлен. С вами свяжутся');
                    return $this->redirect(['/']);


                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('checkout', ['carts' => $carts, 'model' => $model,'usr'=>$usr]);

        }
    }

    public function actionBlog(){
        $posts = Posts::find()->all();
        return $this->render('blog',['posts'=>$posts]);
    }

    private function generateXml($order, $products, $user)
    {
        $__user = Yii::$app->user->identity;
        $xml = <<<_XML
<?xml version="1.0" encoding="UTF-8"?>
<root>
    <products/>
    
    <orders>
        <order>
        <id>{$order->id}</id>
        <user>
            <id>{$__user->id}</id>
            <fio>{$__user->fio}</fio>
            <address>{$__user->address}</address>
            <email>{$__user->email}</email>
            <phone>{$__user->phone}</phone>
        </user>
        <description>{$order->description}</description>
        <products>
_XML;
        foreach ($products as $product) {
            $xml .= <<<_XML
    <product >
    <id>{$product['id']}</id>
    <count>{$product['count']}</count>
    </product>
_XML;
        }
        $xml .= '
    </products>
    <status>1</status>
        </order>
    </orders>
</root>';
        file_put_contents(Yii::getAlias('@app/import/site/'.time().uniqid().'.xml'), $xml);
    }
}
