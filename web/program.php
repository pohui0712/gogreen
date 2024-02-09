<?php 
include './php/dbConn.php';
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap"
      rel="stylesheet"
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
      }
      </style>
      <link rel="stylesheet" href="program.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="slider">
      <div class="slider-list">
        <div class="slider-item">
          <img src="./images/beach.jpeg" alt="image-1" />
        </div>
        <div class="slider-item">
          <img src="./images/beachCleaning.png" alt="image-2" />
        </div>
        <div class="slider-item">
          <img src="./images/schoolCampaign.jpeg" alt="image-3" />
        </div>
        <div class="slider-item">
          <img src="./images/communityCleaning.png" alt="image-4" />
        </div>
        <div class="slider-item">
          <img src="./images/programGridCraftTree.jpg" alt="image-5" />
        </div>
      </div>
    </div>
    <!-- button prev and next -->
    <div class="slider-button">
      <button id="prev"><</button>
      <button id="next">></button>
    </div>
    <!-- dots -->
    <ul class="dots">
      <li class="dots-active"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

    <div class="program-section">
      <?php 
      // Include the database configuration file  
      include './php/dbConn.php'; 
      // Get image data from database 
      $result = $connection->query("SELECT * FROM program ORDER BY id ASC"); 
      ?>

      <!-- Display images with BLOB data from database -->
      <?php if($result->num_rows > 0){ ?> 
          <ul>
            <?php while($row = $result->fetch_assoc()){ ?> 
                <li>
                  <div class="program-content">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                    <h3><?php echo $row['name']; ?></h3>
                    <p>Date: <?php echo $row['date']; ?></p>
                    <p>Time: <?php echo $row['time']; ?></p>
                    <p>Location: <?php echo $row['location']; ?></p>
                    <p>Description: <?php echo $row['description']; ?></p>
                  </div>
                </li>
            <?php } ?> 
          </ul>
      <?php }else{ ?> 
          <p class="status error">Image(s) not found...</p> 
      <?php } ?>
    </div>
    <script type="module" src="./javascript/autoSlider.js"></script>
  </body>
</html>

