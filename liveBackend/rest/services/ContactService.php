<?php

require_once('./dao/ContactDao.php');

class ContactService {

    private $contactDao;

    public function __construct() {
        $this->contactDao = new ContactDao();
    }

    public function addContact($name, $email, $phone, $message) {
        return $this->contactDao->addContact($name, $email, $phone, $message);
    }
}
?>
