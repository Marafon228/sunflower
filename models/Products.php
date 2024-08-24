<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $price
 * @property int $like 0 - не нравиться 1 - нравиться 
 * @property string $year
 * @property int $atrikul
 * @property string $file
 * @property int $status
 * @property string $statusDescription
 * @property int $id_category
 * @property int $id_user
 *
 * @property Carts[] $carts
 * @property Category $category
 * @property Comments[] $comments
 * @property ProductsOrder[] $productsOrders
 * @property Users $user
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image', 'price', 'year', 'atrikul', 'file', 'statusDescription', 'id_category'], 'required'],
            [['description', 'statusDescription'], 'string'],
            [['like', 'atrikul', 'status', 'id_category', 'id_user'], 'integer'],
            [['name', 'image', 'price', 'file'], 'string', 'max' => 255],
            [['year'], 'string', 'max' => 3],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
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
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'price' => 'Price',
            'like' => 'Like',
            'year' => 'Year',
            'atrikul' => 'Atrikul',
            'file' => 'File',
            'status' => 'Status',
            'statusDescription' => 'Status Description',
            'id_category' => 'Id Category',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[Carts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Carts::className(), ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id_product' => 'id']);
    }

    /**
     * Gets query for [[ProductsOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsOrders()
    {
        return $this->hasMany(ProductsOrder::className(), ['id_product' => 'id']);
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
