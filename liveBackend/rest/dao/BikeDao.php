<?php


require_once __DIR__ . "/../config.php";

class BikeDao{
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host='.Config::DB_HOST().';dbname='.Config::DB_NAME().';port='.Config::DB_PORT(), Config::DB_USER(), Config::DB_PASS());
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllBikes() {
        $query = "SELECT * FROM bikes";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
