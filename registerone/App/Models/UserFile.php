<?php

include_once 'Model.php';

class UserFile extends Model
{
    protected static $targetFilePath;

    protected static function table()
    {
        return parent::$table = 'user_files';
    }

    public static function getFilePath()
    {
        return self::$targetFilePath;
    }

    public static function uploadFile($fileArr)
    {
        self::filePath( $fileArr["name"]);
        $fileType = pathinfo(self::$targetFilePath, PATHINFO_EXTENSION);
        if (!in_array($fileType,  ['jpg','JPG', 'png', 'jpeg', 'docx', 'pdf'] ))
            return false;
        return move_uploaded_file($fileArr["tmp_name"], self::$targetFilePath);
    }

    public static function filePath($filename)
    {
        date_default_timezone_set('Asia/Karachi');
        $date = date('mdYHis', time());
        $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/registerone/App/Uploads/";
        $fileName = $date . basename($filename);
        self::$targetFilePath =  $targetDir . $fileName;
    }
}
