<?php

require_once('./dao/NewsletterDao.php');

class NewsletterService {

    private $newsletter_dao;

    public function __construct() {
        $this->newsletter_dao = new NewsletterDao();
    }

    public function add_newsletter($email) {
        return $this->newsletter_dao->add_newsletter($email);
    }
}
?>
