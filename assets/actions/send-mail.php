<?php
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$roboticist = $_POST['roboticist'];
$description = $_POST['description'];

// Set up email headers
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Compose the email message
$subject = "New Contact Form Submission";
$message = "Name: $name\n\n";
$message .= "Phone: $phone\n\n";
$message .= "Email: $email\n\n";
$message .= "Are you a roboticist?: $roboticist\n\n";
$message .= "Description:\n$description";

// Send the email
$to = "info@orionrobotics.org";
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Please try again.";
}
?>
