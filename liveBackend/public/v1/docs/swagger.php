<?php

require __DIR__ . '/../../../vendor/autoload.php';

define('BASE_URL', 'http://localhost/novipok/WebProg/liveBackend/');


error_reporting(0);

$openapi = \OpenApi\Generator::scan(['../../../rest/routes', './']);
//$openapi = \OpenApi\Generator::scan(['../../../rest/get_bikes.php', './']);
// $openapi = \OpenApi\Util::finder(['../../../rest/routes', './'], NULL, '*.php');
// $openapi = \OpenApi\scan(['../../../rest', './'], ['pattern' => '*.php']);

header('Content-Type: application/x-yaml');
echo $openapi->toYaml();
?>