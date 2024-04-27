<?php

require_once('BaseDao.php');

class NewsletterDao extends BaseDao {

    public function __construct() {
        parent::__construct("newsletter");
    }

    public function add_newsletter($email) {
        try {
            // Check if email already exists
            $stmt_check = $this->connection->prepare("SELECT COUNT(*) FROM newsletter WHERE email = :email");
            $stmt_check->bindParam(':email', $email);
            $stmt_check->execute();
            $count = $stmt_check->fetchColumn();

            if ($count > 0) {
                // Email already exists in the database
                return false;
            }

           
            $stmt = $this->connection->prepare("INSERT INTO newsletter (email) VALUES (:email)");

            
            $stmt->bindParam(':email', $email);

            $stmt->execute();

           
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false; 
            }
        } catch (PDOException $e) {
            
            echo "Error: " . $e->getMessage();
            return false; 
        }
    }
}
?>
