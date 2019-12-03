<?php
namespace app\models;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName(){
        return 'user';
    }

    public function setTestUser(){
        $this->name = 'John';
        $this->email = 'vev@pub.ofs.lt';
        $this->passhash = 'HASH';
        $this->status = 2;
    }
}