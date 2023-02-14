<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $id_user
 * @property int $count
 * @property float $over_price
 * @property string|null $description
 * @property string $date
 * @property string $status
 *
 * @property ProductsOrder[] $productsOrders
 * @property Users $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'count', 'over_price'], 'required'],
            [['id_user', 'count'], 'integer'],
            [['over_price'], 'number'],
            [['description', 'status'], 'string'],
            [['date'], 'safe'],
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
            'id_user' => 'Id User',
            'count' => 'Count',
            'over_price' => 'Over Price',
            'description' => 'Description',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[ProductsOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsOrders()
    {
        return $this->hasMany(ProductsOrder::className(), ['id_order' => 'id']);
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
