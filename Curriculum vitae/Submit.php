<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can implement functionality to send email or save the data in a database
    // For example, using the PHP mail() function to send an email

    $to = 'Thosagotshepo225@gmail.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for contacting us!';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
} else {
    echo 'Invalid request method';
}
?>
