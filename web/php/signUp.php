<?php 
include 'dbConn.php';

session_start();

if (isset($_POST["signUpBtn"])) {
    $username = $_POST['signUpName'];
    $email = $_POST['signUpEmail'];
    $password = $_POST['signUpPassword'];
    $donation = 0;

    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['signUpError'] = "Please fill in all the fields";
        header("Location: ../home.php");
        exit();
    }
    
    $validation = "SELECT * FROM testingVolunteers WHERE email = '$email'";
    $result = mysqli_query($connection, $validation);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['signUpError'] = "Email already exists, please use different email";
        header("Location: ../home.php");
        exit();
    } else {
        $query = "INSERT INTO testingVolunteers (username, email, password, donation) 
                  VALUES ('$username', '$email', '$password', '$donation')";
        $registration = mysqli_query($connection, $query);

        if ($registration === true) {
            header("Location: ../home.php");
            exit();
        } else {
            echo "Invalid credentials, please try again";
        }
    }

    mysqli_close($connection);
}

?>