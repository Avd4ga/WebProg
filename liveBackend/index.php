<?php

require "vendor/autoload.php";
require "rest/routes/BikeRoutes.php";
require "rest/routes/CustomersRoutes.php";
require "rest/routes/NewsRoutes.php";
require "rest/routes/auth_routes.php";
require "rest/routes/user_routes.php";




Flight::route('/', function() {
    echo "RADI";
});





Flight::start();
