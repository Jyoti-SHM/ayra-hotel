<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "reservation@ayrahotel.in";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Thank you! Your message has been sent.";
}
?>
