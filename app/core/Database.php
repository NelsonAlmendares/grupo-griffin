<?php
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        $config = require CONFIG . '/config.php';
        
        $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8";
        
        try {
            $this->connection = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}