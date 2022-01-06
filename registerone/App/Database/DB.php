<?php

class DB
{
    protected $connection;
    protected $query;

    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'user_registration';
    private static $instance = null;

    private function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        $this->connection = new PDO($dsn, $this->dbuser, $this->dbpass);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this;
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }
    
    public function prepare($sql, $params = null)
    {
        $this->query = $this->connection->prepare($sql);
        $this->query->execute($params);
        return $this;
    }

    
    public static function lastInsertid()
    {
        return DB::getInstance()->connection->lastInsertId();
    }


    public static function query($sql, $params = null)
    {
        DB::getInstance()->prepare($sql, $params );
        return self::$instance;
    }

    public function fetchAll()
    {
        return $this->query->fetchAll();
    }

    public function fetch()
    {
        return $this->query->fetch();
    }


}