<?php
require_once('./services/CustomersService.php');

$customersService = new CustomersService();
$customersData = $customersService->getAllCustomers();
echo json_encode($customersData);
?>
