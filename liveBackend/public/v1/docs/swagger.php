<?php

require __DIR__ . '/../../../vendor/autoload.php';

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {
    define('BASE_URL', 'http://localhost/novipok/WebProg/liveBackend/');
} else {
    define('BASE_URL', 'https://oyster-app-56r2x.ondigitalocean.app/liveBackend/');
}


//define('BASE_URL', 'http://localhost/novipok/WebProg/liveBackend/');


error_reporting(0);

$openapi = \OpenApi\Generator::scan(['../../../rest/routes', './']);
//$openapi = \OpenApi\Generator::scan(['../../../rest/get_bikes.php', './']);
// $openapi = \OpenApi\Util::finder(['../../../rest/routes', './'], NULL, '*.php');
// $openapi = \OpenApi\scan(['../../../rest', './'], ['pattern' => '*.php']);

header('Content-Type: application/x-yaml');
echo $openapi->toYaml();
?>