<?php

require_once __DIR__ . '/BaseDao.php';

class UserDao extends BaseDao {
    public function __construct() {
        parent::__construct('users'); // TABLE NAME PRODUCT in database
    }


    public function delete_user($id) {
        $query = "DELETE FROM users WHERE id = :id";
        $this->execute($query, ["id" => $id]);
    }

    public function add_user($user) {
        $query = "INSERT INTO users(email,firstName,lastName, pwd) VALUES(:firstName, :lastName, :email, :pwd);";
        $statement = $this->connection->prepare($query);
        $statement->execute([
            "email" => $user["email"],
            "firstName" => $user["firstName"],
            "lastName" => $user["lastName"],
            "pwd" => $user["pwd"]
        ]);
        
    }

    public function get_all_users() {
        $query = "SELECT * FROM users;";
        return $this->query($query, []);
    }
}
