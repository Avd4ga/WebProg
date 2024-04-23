<?php
require_once('./routes/BikeRoutes.php');

class BikeService {
    private $bikeRoutes;

    public function __construct() {
        $this->bikeRoutes = new BikeRoutes();
    }

    public function getAllBikes() {
        return $this->bikeRoutes->handleGetBikes();
    }
}
?>