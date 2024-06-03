<?php
require_once('./dao/BikeDao.php');

class BikeService {
    private $bikeDao;

    public function __construct() {
        $this->bikeDao = new BikeDao();
    }

    public function getAllBikes() {
        return $this->bikeDao->getAllBikes();
    }
}