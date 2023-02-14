<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carts".
 *
 * @property int $id
 * @property int $id_product
 * @property int $id_user
 * @property int $count
 *
 * @property Products $product
 * @property Users $user
 */
class Carts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_product', 'id_user', 'count'], 'required'],
            [['id_product', 'id_user', 'count'], 'integer'],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['id_product' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {

        return [
            'id' => 'ID',
            'id_product' => 'Id Product',
            'id_user' => 'Id User',
            'count' => 'Count',
        ];
    }

    /**
     * Метод добавляет товар в корзину
     */
    public function addToCarts($id, $count = 1) {
        //Yii::$app->session->destroy();
        $count = (int)$count;
        if ($count < 1) {
            return;
        }
        $id = abs((int)$id);
        $product = Products::findOne($id);
        if (empty($product)) {
            return;
        }
        if ($count > 10) {
            $count = 10;
        }
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('carts')) {
            $session->set('carts', []);
            $carts = [];
        } else {
            $carts = $session->get('carts');
        }
        if (isset($carts['products'][$product->id])) { // такой товар уже есть?
            $count = $carts['products'][$product->id]['count'] + $count;
            if ($count > 100) {
                $count = 100;
            }
            $carts['products'][$product->id]['count'] = $count;
        } else { // такого товара еще нет
            $carts['products'][$product->id]['name'] = $product->name;
            $carts['products'][$product->id]['price'] = $product->price;
            $carts['products'][$product->id]['image'] = $product->image;
            $carts['products'][$product->id]['count'] = $count;
        }
        $amount = 0.0;
        foreach ($carts['products'] as $item) {
            $amount = $amount + $item['price'] * $item['count'];
        }
        $carts['amount'] = $amount;

        $over_count = 0;
        foreach ($carts['products'] as $item) {
            $over_count = $over_count + $item['count'];
        }
        $carts['over_count'] = $over_count;
        $session->set('carts', $carts);
    }

    /**
     * Метод удаляет товар из корзины
     */
    public function removeFromCarts($id) {
        $id = abs((int)$id);
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('carts')) {
            return;
        }
        $carts = $session->get('carts');
        if (!isset($carts['products'][$id])) {
            return;
        }
        unset($carts['products'][$id]);
        if (count($carts['products']) == 0) {
            $session->set('carts', []);
            return;
        }
        $amount = 0.0;
        foreach ($carts['products'] as $item) {
            $amount = $amount + $item['price'] * $item['count'];
        }
        $carts['amount'] = $amount;


        $over_count = 0;
        foreach ($carts['products'] as $item) {
            $over_count = $over_count + $item['count'];
        }
        $carts['over_count'] = $over_count;


        $session->set('carts', $carts);
    }

    /**
     * Метод возвращает содержимое корзины
     */
    public function getCarts() {
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('carts')) {
            $session->set('carts', []);
            return [];
        } else {
            return $session->get('carts');
        }
    }

    /**
     * Метод удаляет все товары из корзины
     */
    public function clearCarts() {
        $session = Yii::$app->session;
        $session->open();
        $session->set('carts', []);
    }


    public function updateCarts($data) {
        $this->clearCarts();
        foreach ($data['count'] as $id => $count) {
            $this->addToCarts($id, $count);
        }
    }






    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'id_product']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }
}
