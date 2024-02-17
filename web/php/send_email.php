<?php
session_start();

if(isset($_POST['submitEmail'])) {
    
    if(empty($_POST['message'])) {
        $_SESSION['error_message'] = 'Message field cannot be empty.';
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        $to = 'jiankiat4486@gmail.com';
        $subject = 'New Message from Website';
        $body = "Name: $name\nEmail: $email\n\n$message";
        $headers = "From: $email";
    
        if(mail($to, $subject, $body, $headers)) {
            $_SESSION['success_message'] = 'Message sent successfully!';
        }
    }
    
    header("Location: ../home.php");
    exit();

}
?>
