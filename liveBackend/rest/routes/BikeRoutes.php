<?php
require_once('./dao/BikeDao.php');

class BikeRoutes {
    private $bikeDao;

    public function __construct() {
        $this->bikeDao = new BikeDao();
    }

    public function handleGetBikes() {
        return $this->bikeDao->getAllBikes();
    }
}
?>