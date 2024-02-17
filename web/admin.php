<?php
include './php/dbConn.php';
session_start();
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
            <h3><a href="?logout=true" id='logOut'>Log Out</a></h3>
            <?php
            if (isset($_GET['logout'])) {
                echo '<script>
                            location.href = "./php/logout.php";
                        </script>';
                exit();
            }
            ?>
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
                    while ($row = $accountResult->fetch_assoc()) {
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
                    while ($row = $programResult->fetch_assoc()) {
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
            $sortingSQL = "SELECT DISTINCT name FROM program ORDER BY name ASC";
            $sortingResult = $connection->query($sortingSQL);
            ?>
            <div>
                <h3>Select program to view member: </h3>
                <form action="" method="GET" id="sortForm">
                    <select name="sort-list" id="sort-prorgam" onchange="document.getElementById('sortForm').submit()">
                        <option value="default" <?php if (!isset($_GET["sort-list"]) || $_GET["sort-list"] == "default") {
                            echo "selected";
                        } ?>>Default</option>
                        <?php
                        if ($sortingResult->num_rows > 0) {
                            while ($row = $sortingResult->fetch_assoc()) {
                                $programName = $row["name"];
                                echo "<option value='$programName' " . (isset($_GET["sort-list"]) && $_GET["sort-list"] == $programName ? "selected" : "") . ">$programName</option>";
                            }
                        }
                        ?>
                    </select>
                </form>
            </div>
            <?php
            // Fetch selected program name from the sorting form
            $selectedProgram = isset($_GET["sort-list"]) ? $_GET["sort-list"] : "default";

            // SQL query to get program details based on selected program name
            $joinedSQL = "
                    SELECT
                        pm.program_id,
                        p.name AS program_name,
                        pm.joinUser_id,
                        tv.username
                    FROM
                        program_member pm
                    JOIN program p ON pm.program_id = p.id
                    JOIN testingvolunteers tv ON pm.joinUser_id = tv.userID
                    " . ($selectedProgram !== "default" ? "WHERE p.name = '$selectedProgram'" : "") . "
                    ORDER BY p.id ASC";

            $joinedResult = $connection->query($joinedSQL);
            ?>

            <table border="1">
                <tr>
                    <th>Program ID</th>
                    <th>Program Name</th>
                    <th>UserID</th>
                    <th>Username</th>
                </tr>

                <?php
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
                        <input type="file" name="image" required>
                    </div>
                    <div class="form-group">
                        <label>Program Name:</label>
                        <input type="text" name="programName" required>
                    </div>
                    <div class="form-group">
                        <label>Program Date:</label>
                        <input type="date" name="programDate" required>
                    </div>
                    <div class="form-group">
                        <label>Program Time:</label>
                        <input type="time" name="programTime" required>
                    </div>
                    <div class="form-group">
                        <label>Program Location:</label>
                        <input type="text" name="programLocation" required>
                    </div>
                    <div class="form-group">
                        <label>Program Description:</label>
                        <input type="text" name="programDescription" required>
                    </div>
                    <input type="submit" name="submit" value="Upload" required>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="./javascript/DOMContentLoaded.js"></script>

</body>

</html>