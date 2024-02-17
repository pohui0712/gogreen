<?php
session_start();

if(isset($_POST['submit'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'jiankiat4486@gmail.com';
    $subject = 'New Message from Website';
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";

    if(empty(mail($to, $subject, $body, $headers))) {
        $_SESSION['success_message'] = 'Message sent successfully!';
    } else {
        $_SESSION['error_message'] = 'No message can be sent';
    }

    header("Location: ../home.php");
    exit();

}
?>
