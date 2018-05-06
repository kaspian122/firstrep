<?php
/**
 * Created by PhpStorm.
 * User: vitalka
 * Date: 03.05.2018
 * Time: 21:32
 */

namespace app\models;


use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }
}