<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['yourName']);
    $email = htmlspecialchars($_POST['yourEmail']);
    $message = htmlspecialchars($_POST['yourMessage']);

    $to = "ignaciio.tejera@outlook.com"; // Cambia esto a tu dirección de correo de destino
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Message sent successfully!</h1>";
        echo "<p>Thank you for contacting me. I'll get back to you as soon as possible.</p>";
    } else {
        echo "<h1>Error sending message.</h1>";
        echo "<p>Please try again later or contact me directly at <a href='mailto:ignacio.tejera@outlook.com'>ignacio.tejera@outlook.com</a>.</p>";
    }
}
?>
