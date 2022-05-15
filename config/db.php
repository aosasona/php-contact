<?php
class DB
{
    /**
     * @access private
     * @description Database connection variables
     */
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $port = "3306";
    private $dbname = "contact";
    private $conn;

    /**
     * @access public
     * @description Database connection
     */
    public function connect()
    {
        $this->conn = null;

        try {
            $dsn = "mysql:host={$this->host}:{$this->port};dbname={$this->dbname}";
            // $dsn = "mysql:host=localhost:3306;dbname=contact;charset=UTF8";
            $this->conn = new PDO($dsn, $this->username, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        return $this->conn;
    }

    /**
     * @access public
     * @description Establish the connection
     */

    // public function __construct()
    // {
    //     $this->connect();
    // }
}
