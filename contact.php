<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    // Validate form inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Set the recipient email address
    $to = 'athithbalan@gmail.com';

    // Set the email subject
    $subject = 'New Message from Contact Form';

    // Set the email headers
    $headers = "From: $name <$email>\r\n";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message: $message\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "An error occurred while sending the message.";
    }
}
?>