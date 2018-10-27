<?php
class ConnectDB
{
    public $conn;

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', 'none', '18php04_shop_mau');
        mysqli_set_charset($this->conn,"utf8");
        
        return $this->conn;
    }
    public function __construct()
    {
        $this->connect();
    }
}
