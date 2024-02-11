<?php 
include './php/dbConn.php';
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Check if the 'id' parameter exists in the URL
    if (isset($_GET['id'])) {
        // Sanitize and validate the ID (assuming it's an integer)
        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

        if ($id !== false) {
            $query = "SELECT * FROM program WHERE id = $id";
            $result = $connection->query($query);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Display details on the page
                echo "<h2>Details for Program ID: $id</h2>";
                echo "<p><b>Name: </b>{$row['name']}</p>";
                echo "<p><b>Date: </b>{$row['date']}</p>";
                echo "<p><b>Time: </b>{$row['time']}</p>";
                echo "<p><b>Location: </b>{$row['location']}</p>";
                echo "<p><b>Description: </b>{$row['description']}</p>";

                if (!empty($row['image'])) {
                    $base64Image = base64_encode($row['image']);
                    echo "<img src='data:image/jpg;base64,$base64Image' alt='Program Image'>";
                }

            } else {
                echo "<p>Error: Program not found.</p>";
            }

            $connection->close();
        } else {
            echo "<p>Error: Invalid ID.</p>";
        }
    } else {
        echo "<p>Error: Missing ID parameter.</p>";
    }
    ?>
    <?php include 'footer.html' ?>
</body>
</html>