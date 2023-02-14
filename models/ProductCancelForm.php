<?php

namespace app\models;

class ProductCancelForm extends Products
{


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reason'], 'required'],
        ];
    }

}