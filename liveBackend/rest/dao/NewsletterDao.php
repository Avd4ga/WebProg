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

            // Prepare an SQL statement to insert the email
            $stmt = $this->connection->prepare("INSERT INTO newsletter (email) VALUES (:email)");

            // Bind the email data to the SQL statement
            $stmt->bindParam(':email', $email);

            // Execute the SQL statement
            $stmt->execute();

            // Check if the insertion was successful
            if ($stmt->rowCount() > 0) {
                return true; // Return true if insertion was successful
            } else {
                return false; // Return false if insertion failed
            }
        } catch (PDOException $e) {
            // Handle PDO exceptions
            echo "Error: " . $e->getMessage();
            return false; // Return false in case of an exception
        }
    }
}
?>
