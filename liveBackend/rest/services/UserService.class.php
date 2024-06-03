<?php

require_once __DIR__ . '/../dao/UserDao.class.php';

class UserService {

    private $user_dao;

    public function __construct() {
        $this->user_dao = new UserDao();
    }



    public function delete_user($user_id) {
        $this->user_dao->delete_user($user_id);
    }

    public function add_user($user) {
        $user["pwd"] = password_hash($user["pwd"], PASSWORD_BCRYPT);
        return $this->user_dao->add_user($user);
    }

    public function get_all_users() {
        return $this->user_dao->get_all_users();
    }

}