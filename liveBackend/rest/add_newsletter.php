<?php

require_once('./services/NewsletterService.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is set and not empty
    if (isset($_POST['enterMail']) && !empty($_POST['enterMail'])) {
        $email = $_POST['enterMail'];

        
        $newsletter_service = new NewsletterService();

       
        $result = $newsletter_service->add_newsletter($email);

        
        if ($result) {
            echo json_encode(array('message' => 'Email added to newsletter successfully'));
        } else {
            echo json_encode(array('message' => 'Failed to add email to newsletter, already there'));
        }
    } else {
        echo json_encode(array('message' => 'Email field is empty'));
    }
} else {
    echo json_encode(array('message' => 'Invalid request method'));
}
?>
