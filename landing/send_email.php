<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if ($email === false) {
        echo "Invalid email address.";
        exit;
    }

    // Email details
    $to = "drravikumar556@gmail.com"; // Replace with your email address
    $subject = "New Appointment Request";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h2>New Appointment Request</h2>
             <p><strong>Name:</strong> $name</p>
             <p><strong>Email:</strong> $email</p>
             <p><strong>Phone:</strong> $phone</p>
             <p><strong>Preferred Date:</strong> $date</p>
             <p><strong>Message:</strong><br>$message</p>";

    // Send email
    if (mail($to, $subject, $body, $headers))
     {
        echo "Email successfully sent!";
    } else {
        
        echo "Email sending failed.";
    }
}
?>
