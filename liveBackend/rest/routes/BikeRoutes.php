<?php

/**
 * @OA\Get(
 *      path="/bikes", 
 *      tags={"Bikes"},
 *      summary="Get Bike details",
 *      @OA\Response(
 *          response="200", 
 *          description="Bike details"
 *      ),
 *     @OA\Response(
 *         response="500",
 *         description="Bikes not found!"
 *    )
 * )
 */


require_once __DIR__ . "/../dao/BikeDao.php";

// Custom middleware function to log requests
function requestLogger(&$params, &$output) {
    // Log the request details
    $request_details = [
        'method' => $_SERVER['REQUEST_METHOD'],
        'url' => $_SERVER['REQUEST_URI'],
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    
    echo "Request logged: " . json_encode($request_details) . "\n";
}


Flight::route('GET /bikes', function() {
    
    requestLogger($params, $output);
    
    
    $bikeDao = new BikeDao();
    $bikesData = $bikeDao->getAllBikes();
    Flight::json($bikesData);
});

?>
