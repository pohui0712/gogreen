<?php 
include 'dbConn.php';

session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $filtered_id = $_SESSION['filtered_id'];

//    ?????????????
} else {
    echo '<script> 
    setTimeout(function() {
        alert("Please sign in before donating"); 
        window.location.href = "../home.php";
    }, 100);
    </script>';
}
?>
