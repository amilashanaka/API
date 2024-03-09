<?php
class Database
{

    // Db connection

    private $host = 'localhost';
    private $db_name = 'traveller';
    private $db_user = 'root';
    private $db_pass = '';
    private $conn;

    // Db connect 
    public function connect()
    {
        $this->conn = null;
        try {

            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

        return $this->conn;
    }
}
