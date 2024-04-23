<?php
require_once './config.php';

class BaseDao {
    protected $connection;

    public function __construct($table) {
        try {
            $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8;port=" . DB_PORT, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    protected function execute($query, $params) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
    }
}
?>
