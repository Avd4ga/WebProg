<?php

/**
 * @OA\Get(
 *      path="/customers", 
 *      tags={"Customers"},
 *      summary="Get customers details",
 *      @OA\Response(
 *          response="200", 
 *          description="Customers details if user exists"
 *      ),
 *     @OA\Response(
 *         response="500",
 *         description="Customers not logged in"
 *    )
 * )
 */


require_once __DIR__ . "/../dao/CustomersDao.php";

Flight::route('GET /customers', function() {
    $customersDao = new CustomersDao();
    $customersData = $customersDao->getAllCustomers();
    Flight::json($customersData);
});
?>