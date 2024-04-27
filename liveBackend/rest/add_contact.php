<?php

require_once('./services/ContactService.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set and not empty
    if (isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Number']) && isset($_POST['Message'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Number'];
        $message = $_POST['Message'];

        
        $contactService = new ContactService();

        
        $result = $contactService->addContact($name, $email, $phone, $message);

        
        if ($result['success']) {
            echo json_encode(array('message' => 'Message sent successfully'));
        } else {
            echo json_encode(array('message' => 'Failed to send message', 'error' => $result['error']));
        }
    } else {
        echo json_encode(array('message' => 'Required fields are missing'));
    }
} else {
    echo json_encode(array('message' => 'Invalid request method'));
}
?>
