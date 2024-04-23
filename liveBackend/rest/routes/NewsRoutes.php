<?php
require_once('./dao/NewsDao.php');

class NewsRoutes {
    private $newsDao;

    public function __construct() {
        $this->newsDao = new NewsDao();
    }

    public function handleGetNews() {
        return $this->newsDao->getAllNews();
    }
}
?>
