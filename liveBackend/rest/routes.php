<?php

Flight::route('POST /add_contact', function() {
    $data = Flight::request()->data->getData();
    $contactService = new ContactService();
    $result = $contactService->addContact(
        $data['Name'], 
        $data['Email'], 
        $data['Number'], 
        $data['Message']
    );
    if ($result['success']) {
        Flight::json(['message' => 'Message sent successfully']);
    } else {
        Flight::json(['message' => 'Failed to send message', 'error' => $result['error']]);
    }
});

Flight::route('POST /add_newsletter', function() {
    $data = Flight::request()->data->getData();
    $newsletterService = new NewsletterService();
    $result = $newsletterService->add_newsletter($data['enterMail']);
    if ($result) {
        Flight::json(['message' => 'Email added to newsletter successfully']);
    } else {
        Flight::json(['message' => 'Failed to add email to newsletter, already there']);
    }
});
