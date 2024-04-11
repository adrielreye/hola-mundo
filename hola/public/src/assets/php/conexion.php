<?php

class Database {
    // Cambia estas variables con los detalles de tu base de datos
    private $host = "localhost";
    private $db_name = "pcstore";
    private $username = "root";
    private $password = "";
    public $conn;

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;

        try {
            // Conexión mediante PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
