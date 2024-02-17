<?php 
include './php/dbConn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'admin.css' ?>
    </style>
    <title>Document</title>
</head>
<body>

    <div class="admin-container">
        <div class="admin-option">
            <h1>Your Page Title</h1>
            <h3 id="view-account">View User's Account</h3>
            <h3 id="view-program">View Programs</h3>
            <h3 id="joined-member">View Joined Programs' Member</h3>
            <h3 id="add-program">Add Program</h3>
        </div>
        <div id="account-table">
            <h1>Registered User</h1>
            <table>
                <tr>
                    <th>UserID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Donation</th>
                </tr>
                <?php
                    $accountSQL = "SELECT * FROM testingvolunteers";
                    $accountResult = $connection->query($accountSQL);

                    if ($accountResult->num_rows > 0) {
                        while($row = $accountResult->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["userID"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["donation"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>0 results</td></tr>";
                    } 
                ?>
            </table>
            
        </div>
        <div id="program-table">
            <h1>program</h1>
            <table border="1">
                <tr>
                    <th>Program ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
                <?php
                    $programSQL = "SELECT * FROM program";
                    $programResult = $connection->query($programSQL);
                    
                    if ($programResult->num_rows > 0) {
                        while($row = $programResult->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "<td>" . $row["location"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>0 results</td></tr>";
                    } 
                    ?>
            </table>
        </div>
        <div id="joined-table">
            <?php
                $joinedSQL = "
                    SELECT
                        pm.program_id,
                        p.name AS program_name,
                        pm.joinUser_id,
                        tv.username
                    FROM
                        program_member pm
                    JOIN program p ON pm.program_id = p.id
                    JOIN testingvolunteers tv ON pm.joinUser_id = tv.userID;
                ";
            ?> 
            <table border="1">
                <tr>
                    <th>Program ID</th>
                    <th>Program Name</th>
                    <th>JoinUser ID</th>
                    <th>Username</th>
                </tr>
                
                <?php
                    $joinedResult = $connection->query($joinedSQL);
                    if ($joinedResult->num_rows > 0) {
                        while ($row = $joinedResult->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["program_id"] . "</td>";
                            echo "<td>" . $row["program_name"] . "</td>";
                            echo "<td>" . $row["joinUser_id"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>0 results</td></tr>";
                    }
                ?>
            </table>
        </div>
        <div id="adding-table">
            <form action="./php/upload.php" method="post" enctype="multipart/form-data">
                <div id="input-form">
                    <div class="form-group">
                        <label>Select Image File:</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Program Name:</label>
                        <input type="text" name="programName">
                    </div>
                    <div class="form-group">
                        <label>Program Date:</label>
                        <input type="date" name="programDate">
                    </div>
                    <div class="form-group">
                        <label>Program Time:</label>
                        <input type="time" name="programTime">
                    </div>
                    <div class="form-group">
                        <label>Program Location:</label>
                        <input type="text" name="programLocation">
                    </div>
                    <div class="form-group">
                        <label>Program Description:</label>
                        <input type="text" name="programDescription">
                    </div>
                    <input type="submit" name="submit" value="Upload">
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var viewAccount = document.getElementById("view-account");
            var viewProgram = document.getElementById("view-program");
            var addProgram = document.getElementById("add-program");
            var joinedProgram = document.getElementById("joined-member");

            var accountTable = document.getElementById("account-table");
            var programTable = document.getElementById("program-table");
            var addingTable = document.getElementById("adding-table");
            var joinedTable = document.getElementById("joined-table");

            viewAccount.addEventListener("click", function() {
                accountTable.style.display = "block";
                programTable.style.display = "none";
                addingTable.style.display = "none";
                joinedTable.style.display = "none";
            });

            viewProgram.addEventListener("click", function() {
                accountTable.style.display = "none";
                programTable.style.display = "block";
                addingTable.style.display = "none";
                joinedTable.style.display = "none";
            });

            addProgram.addEventListener("click", function() {
                accountTable.style.display = "none";
                programTable.style.display = "none";
                addingTable.style.display = "block";
                joinedTable.style.display = "none";
            });

            joinedProgram.addEventListener("click", function() {
                accountTable.style.display = "none";
                programTable.style.display = "none";
                addingTable.style.display = "none";
                joinedTable.style.display = "block";
            });
        });
    </script>

</body>
</html>

</body>
</html>