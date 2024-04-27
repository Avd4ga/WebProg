<?php
require_once('./routes/NewsRoutes.php');

class NewsService {
    private $newsRoutes;

    public function __construct() {
        $this->newsRoutes = new NewsRoutes();
    }

    public function getAllNews() {
        return $this->newsRoutes->handleGetNews();
    }
}
?>
