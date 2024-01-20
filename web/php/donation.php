<?php 
include 'dbConn.php';

session_start();

if (isset($_POST['donateBtn'])){
    $donation = $_POST['donation'];
    $email = $_POST['signInEmail'];

    $query = "INSERT INTO testingVolunteers (donation, email) VALUES ('$donation', '$email')";
    $result = mysqli_query($connection, $query);

    mysqli_close($connection);
}

?>