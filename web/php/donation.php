<?php 
include 'dbConn.php';

session_start();

if (isset($_SESSION['email'])) {

    if (isset($_POST['donateBtn'])) {
        $donation = $_POST['donateAmount'];
        $email = $_SESSION['email']; 
        $cardName = $_POST['cardName'];
        $cardNumber = $_POST['cardNumber'];
        $expiration = $_POST['expiration'];
        $cvc = $_POST['cvc'];   

        if (empty($donation) || empty($cardName) || empty($cardNumber) || empty($expiration) || empty($cvc)) {
            echo '<script> 
                 alert("Please fill in all the fields");
                 </script>';
            exit();
        }

        $query = "UPDATE testingVolunteers SET donation = (donation + '$donation') WHERE email = '$email' ";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo '<script> if (confirm("Donate successfully")) {
                  window.location.href = "../home.php" }  
                  </script>';
        } else {
            echo '<script> alert("Fail to donate") </script>';
        }

        mysqli_close($connection);
    }
} else {
    echo '<script> 
    setTimeout(function() {
        alert("Please sign in before donating"); 
        window.location.href = "../home.php";
    }, 100);
    </script>';

}
?>