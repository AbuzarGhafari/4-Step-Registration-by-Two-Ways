<?php

include_once 'Model.php';

class UserLink extends Model
{
    protected static function table()
    {
        return parent::$table = 'user_links';
    }

}

