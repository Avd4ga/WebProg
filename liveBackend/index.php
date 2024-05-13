
<?php


require "vendor/autoload.php";

require "rest/routes/BikeRoutes.php";
require "rest/routes/CustomersRoutes.php";
require "rest/routes/NewsRoutes.php";

require "rest/routes/auth_routes.php";


Flight::route("GET /web", function() {
    echo "GET REQ RADI";
    
});

Flight::start();



