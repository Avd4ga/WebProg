<?php
require_once('./dao/CustomersDao.php');

class CustomersService {
    private $customersDao;

    public function __construct() {
        $this->customersDao = new CustomersDao();
    }

    public function getAllCustomers() {
        return $this->customersDao->getAllCustomers();
    }
}