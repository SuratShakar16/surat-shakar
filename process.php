<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "waddadars01@gmail.com";
    $headers = "From: $email";

    // Append name and email to the message
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script type='text/javascript'>
                alert('Email Sent Successfully');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Email Not Sent');
                window.location.href = 'index.html';
              </script>";
    }
}
?>
