<?php

namespace app\models;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $price
 * @property int $id_category
 *
 * @property Category $category
 */
class ProductCreateForm extends Products
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image', 'id_category','price'], 'required'],
            [['description'], 'string'],
            [['id_category'], 'integer'],
            ['image', 'file','extensions'=> 'png, jpg, jpeg, bmp', 'maxSize' => 10*1024*1024, 'message' => 'Большой файл'],
            [['name', 'image','price'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

}