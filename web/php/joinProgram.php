<?php
include 'dbConn.php';

session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $filtered_id = $_SESSION['filtered_id'];

    // Check if the relationship already exists
    $checkMember = "SELECT * FROM program_member WHERE program_id = $filtered_id AND username = (SELECT username FROM testingvolunteers WHERE email = '$email')";
    $checkMemberResult = $connection->query($checkMember);

    if ($checkMemberResult && $checkMemberResult->num_rows == 0) {
        // If the relationship doesn't exist, insert into the program_member table
        $insertJoinedMember = "INSERT INTO program_member (program_id, joinUser_id, username) VALUES ($filtered_id, (SELECT userID FROM testingvolunteers WHERE email = '$email'), (SELECT username FROM testingvolunteers WHERE email = '$email'))";
        $insertJoinedMemberResult = $connection->query($insertJoinedMember);
        echo '<script> 
            alert("Join successfully!! See you that day!"); 
            window.location.href = "../program.php";
        </script>';

        if (!$insertJoinedMemberResult) {
            echo "Error: " . $connection->error;
        }
    } else {
        echo '<script> 
            alert("You have already joined this program!"); 
            window.location.href = "../program.php";
        </script>';
    }
} else {
    echo '<script> 
    setTimeout(function() {
        alert("Please sign in before joining"); 
        window.location.href = "../home.php";
    }, 100);
    </script>';
}
?>