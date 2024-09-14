<?php
class config {
    private $host = 'localhost';
    private $dbname = 'igao';
    private $user = 'root';
    private $pass = '3306';
    private $port = '3306';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function getConn() {
        return $this->conn;
    }
    
}



?>

