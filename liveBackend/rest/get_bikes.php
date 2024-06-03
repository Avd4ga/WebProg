<?php



require_once('./services/BikeService.php');

$bikeService = new BikeService();
$bikesData = $bikeService->getAllBikes();
echo json_encode($bikesData);
?>