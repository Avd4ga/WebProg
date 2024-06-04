<?php



require_once('./services/NewsService.php');

$newsService = new NewsService();
$newsData = $newsService->getAllNews();
echo json_encode($newsData);
?>
