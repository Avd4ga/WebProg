<?php
require_once('./config.php');
require_once('BaseDao.php');

class CustomersDao extends BaseDao{
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllCustomers() {
        $query = "SELECT * FROM customers";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}