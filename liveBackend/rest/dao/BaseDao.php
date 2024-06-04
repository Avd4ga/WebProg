<?php
require_once __DIR__ . "/../config.php";

class BaseDao {
    protected $connection;

    public function __construct($table) {
        try {
            $this->connection = new PDO("mysql:host=" . Config::DB_HOST() . ";dbname=" . Config::DB_NAME() . ";charset=utf8;port=" . Config::DB_PORT(), Config::DB_USER(), Config::DB_PASS(), [
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
    protected function query($query, $params) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function query_unique($query, $params) {
        $results = $this->query($query, $params);
        return reset($results);
    }
}
?>
