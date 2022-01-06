<?php

include_once 'Model.php';

class User extends Model
{
    protected static function table()
    {
        return parent::$table = 'user';
    }

}

