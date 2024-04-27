<?php
require_once('./routes/CustomersRoutes.php');

class CustomersService {
    private $customersRoutes;

    public function __construct() {
        $this->customersRoutes = new CustomersRoutes();
    }

    public function getAllCustomers() {
        return $this->customersRoutes->handleGetCustomers();
    }
}
?>
