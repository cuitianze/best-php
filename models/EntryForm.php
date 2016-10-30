<?php
/**
 * Created by PhpStorm.
 * User: Tianze
 * Date: 16/10/30
 * Time: 下午2:46
 */

namespace app\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}