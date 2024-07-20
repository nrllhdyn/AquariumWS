<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $option = htmlspecialchars($_POST['option']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // E-posta detayları
    $to = "nurullahdyn@gmail.com";  // E-postanın gönderileceği adres
    $subject = "New Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nOption: $option\nMessage: $message";
    $headers = "From: $email";

    // E-postayı gönder
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to.";
    } else {
        echo "Email sending failed.";
    }
}
?>
