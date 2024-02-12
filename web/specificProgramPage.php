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
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap"
      rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      body {
        height: 100vh;
        width: 100%;
        background-color: honeydew;
        font-family: "Playpen Sans";
    
        <?php include 'specificProgramPage.css'?>
        <?php include 'index.css'?>
      }
    </style>
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['id'])) {
        // Sanitize and validate the ID (assuming it's an integer)
        $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

        if ($id !== false) {
            $_SESSION['filtered_id'] = $id;
            $query = "SELECT * FROM program WHERE id = $id";
            $result = $connection->query($query);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
?>
                <div class="click-content">
                    <?php if (!empty($row['image'])) {
                        $base64Image = base64_encode($row['image']);
                        echo "<img src='data:image/jpg;base64,$base64Image' alt='Program Image'>";
                    } ?>
                    
                    <div class="content-information">
                        <p id="specific-name"><b><?php echo $row['name']; ?></b></p>
                        <div id="other-information">
                            <p><i class='fa-regular fa-calendar'></i><b>Date: </b><?php echo $row['date']; ?></p>
                            <p><i class='fa-regular fa-clock'></i><b>Time: </b><?php echo $row['time']; ?></p>
                            <p><i class='fa-solid fa-location-dot'></i><b>Location: </b><?php echo $row['location']; ?></p>
                            <p><i class='fa-solid fa-circle-info'></i><b>Description: </b><?php echo $row['description']; ?></p>
                        </div>
                        <form action="./php/joinProgram.php"><button id="join-btn">JOIN</button></form>
                    </div>
                </div>
    <?php
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