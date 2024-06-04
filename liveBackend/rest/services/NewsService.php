<?php
require_once('./dao/NewsDao.php');

class NewsService {
    private $newsDao;

    public function __construct() {
        $this->newsDao = new NewsDao();
    }

    public function getAllNews() {
        return $this->newsDao->getAllNews();
    }
}