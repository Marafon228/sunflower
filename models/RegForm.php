<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin
 *
 */
class RegForm extends Users
{

    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'address', 'email', 'password', 'passwordConfirm', 'agree'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['fio', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кирилица, пробелы и дефисы'],
            //['login', 'match', 'pattern' => '/^[A-Za-z\s\-]{1,}$/u', 'message' => 'Только латинские буквы'],
            ['email', 'unique', 'message' => 'Этот email занят'],
            ['email', 'email', 'message' => 'Некорректный Email адрес'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password' , 'message' => 'Пароли должны совподать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message' => 'Необходимо согласиться'],
            //[['admin'], 'integer'],
            [['fio', 'email','phone','address', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'email' => 'Email',
            'password' => 'Пароль',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'passwordConfirm' => 'Подтверждение пароля',
            'agree' => 'Даю согласие на обработку данных',
        ];
    }



}