<?php

class Request
{
    protected static $errors = [];

    public static function validate($requestArr, $fieldsArr)
    {
        self::$errors = array();
        foreach ($fieldsArr as $key) {
            if (!array_key_exists($key, $requestArr)) {
                self::$errors[] = ucfirst($key) . ' is required!!';
            }
        }

        if (count(self::$errors) > 0) { return false; }
        return true;
    }

    public static function getErrors()
    {
        if(count(self::$errors) > 0){
            echo 'errors';
        }else {
            echo 'no errors';
        }
        return self::$errors;
    }

    public static function getFirstError()
    {
        return self::$errors[0];
    }

}
