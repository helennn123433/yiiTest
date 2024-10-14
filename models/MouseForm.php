<?php
namespace app\models;

use yii\base\Model;

class MouseForm extends Model {
    public $name;
    public $email;

    public function rules() {
        return [
            [['name', 'email'], 'required'],

            ['email', 'email']
        ];
    }
}