<?php 
include 'dbConn.php';

session_start();

if (isset($_POST["signInBtn"])) {
    $email = $_POST['signInEmail'];
    $password = $_POST['signInPassword'];

    $query = "SELECT * FROM testingVolunteers WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    $login = mysqli_fetch_array($result);

    if (is_array($login)) {
        $_SESSION['email'] = $login['email'];
        $_SESSION['password'] = $login['password'];
        $_SESSION['username'] = $login['username'];
        $_SESSION['donation'] = $login['donation'];
        header("Location: ../home.php");
        exit();
    } else {
        $_SESSION['signInError'] = "Invalid credentials, please try again";
        header("Location: ../home.php");
        exit();
    }
   
    mysqli_close($connection);
}


?>