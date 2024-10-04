<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $dept = htmlspecialchars(trim($_POST['dept']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Form Submission';
    $body = "Name: $name\nEmail: $email\nDepartment: $dept\nMessage:\n$message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'There was a problem sending the message.';
    }
} else {
    echo 'Invalid request.';
}
?>
