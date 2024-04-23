<?php
require_once('./dao/CustomersDao.php');

class CustomersRoutes {
    private $customersDao;

    public function __construct() {
        $this->customersDao = new CustomersDao();
    }

    public function handleGetCustomers() {
        return $this->customersDao->getAllCustomers();
    }
}
?>
