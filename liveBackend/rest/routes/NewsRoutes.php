<?php

/**
 * @OA\Get(
 *      path="/news", 
 *      tags={"News"},
 *      summary="Get News details",
 *      @OA\Response(
 *          response="200", 
 *          description="News details"
 *      ),
 *     @OA\Response(
 *         response="500",
 *         description="News details not found!"
 *    )
 * )
 */

 


 require_once __DIR__ . "/../dao/NewsDao.php";
 
 class NewsRoutes {
     public function __construct() {
         Flight::route('GET /news', function() {
             $newsDao = new NewsDao();
             $newsData = $newsDao->getAllNews();
             Flight::json($newsData);
         });
     }
 }
 
 // Then instantiate the class to define the routes
 new NewsRoutes();