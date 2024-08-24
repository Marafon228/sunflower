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

    public $count;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image', 'id_category','price','year','file', 'count'], 'required'],
            [['description'], 'string'],
            [['id_category'], 'integer'],
            ['image', 'file','extensions'=> 'png, jpg, jpeg, bmp', 'maxSize' => 100*1024*1024, 'message' => 'Большой файл'],
            ['file', 'file','extensions'=> 'pdf', 'maxSize' => 100*1024*1024, 'message' => 'Большой файл'],
            [['name', 'image','price'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'image' => 'Фото',
            'price' => 'Цена',
            'file' => 'Файл',
            'year' => 'Возрастная категроия',
            'atrikul' => 'Артикул',
            'id_category' => 'Категория',
            'count'=>'Количество'
        ];
    }

}