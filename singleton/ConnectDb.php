<?php
class ConnectDb {
    private $conn;
    private $host = '127.0.0.1';
    private $user = 'root';
    private $pass = '12345678';
    private $name = 'test_db';

    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
        dbname={$this->name}", $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    public function getConnection()
    {
    return $this->conn;
    }

}