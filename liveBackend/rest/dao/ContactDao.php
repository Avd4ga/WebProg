<?php

require_once('BaseDao.php');

class ContactDao extends BaseDao {

    public function __construct() {
        parent::__construct("contact");
    }

    public function addContact($name, $email, $phone, $message) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO contact (name, email, phone, `longtext`) VALUES (:name, :email, :phone, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            return array('success' => true);
        } catch (PDOException $e) {
            return array('success' => false, 'error' => $e->getMessage());
        }
    }
    
}
?>
