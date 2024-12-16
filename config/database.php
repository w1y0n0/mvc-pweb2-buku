<?php
// config/database.php
class Database {
    private $host = 'localhost'; //'160.19.166.42';
    private $db_name = '2d_klp4'; //2D_klp4';
    private $username = 'root'; //'2D_klp4';
    private $password = ''; //'rp4jGe]*c@b*lQRt';
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
