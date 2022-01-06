<?php

include_once('../Database/DB.php');
include_once('../Traits/Arrays.php');

abstract class Model
{
    use Arrays;

    protected static $table;

    protected abstract static function table();

    public static function all()
    {
        $sql = "Select * FROM " . static::table() . ";";
        return DB::query($sql)->fetchAll();
    }

    public static function find($id)
    {
        $sql = "Select * FROM " . static::table() . " WHERE id = ?;";
        return DB::query($sql, [$id])->fetch();
    }

    public static function insert($params)
    {
        $sql = "INSERT INTO " . static::table() . " ( " . self::getKeysStrings($params) . " ) " . "VALUES ( " . self::getBlanks($params) . " );";
        return DB::query($sql, self::getValuesArray($params));
    }

    public static function lastInsertId()
    {
        return DB::lastInsertId();
    }

    public static function update($id, $params)
    {
        $sql = "UPDATE " . static::table() . " SET " . self::getArrAttributes($params)  . " WHERE id=?; ";
        $values = self::getValuesArray($params);
        $values[] = $id;
        return DB::query($sql, $values);
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM  " . static::table() . "  WHERE id = ?;";
        return DB::query($sql, [$id]);
    }
}
