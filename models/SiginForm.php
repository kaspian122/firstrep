<?php
/**
 * Created by PhpStorm.
 * User: vitalka
 * Date: 19.04.2018
 * Time: 14:10
 */

namespace app\models;


use yii\db\ActiveRecord;

class SiginForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }
}