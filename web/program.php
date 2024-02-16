<?php 
include './php/dbConn.php';
session_start();
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
      }
      <?php include 'index.css' ?>
      <?php include 'program.css' ?>
    </style>
    <title>Document</title>
  </head>
  <body>
    <?php include 'header.php' ?>
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
      <div class="sort-section">
        <h3>View As: </h3>
        <form action="" method="GET" id="sortForm">
          <select name="sort-list" id="sort-list" onchange="document.getElementById('sortForm').submit()">
            <option value="default" <?php if(isset($_GET["sort-list"]) && $_GET["sort-list"] == "default") { echo "selected"; }?>>Default</option>
            <option value="a-z" <?php if(isset($_GET["sort-list"]) && $_GET["sort-list"] == "a-z") { echo "selected"; }?>>A-Z</option>
            <option value="z-a"<?php if(isset($_GET["sort-list"]) && $_GET["sort-list"] == "z-a") { echo "selected"; }?>>Z-A</option>
            <option value="date-asc" <?php if(isset($_GET["sort-list"]) && $_GET["sort-list"] == "date-asc") { echo "selected"; }?>>Sort by Date</option>
          </select>
        </form>
      </div>

      <?php 
        $sort_option = "SELECT * FROM program ORDER BY id ASC";
        if(isset($_GET["sort-list"]))
        {
          if($_GET["sort-list"] == "default"){
            $sort_option = "SELECT * FROM program ORDER BY id ASC";
          } elseif($_GET["sort-list"] == "a-z"){
            $sort_option = "SELECT * FROM program ORDER BY name ASC";
          } elseif($_GET["sort-list"] == "z-a"){
            $sort_option = "SELECT * FROM program ORDER BY name DESC";
          } elseif($_GET["sort-list"] == "date-asc"){
            $sort_option = "SELECT * FROM program ORDER BY date ASC";
          }
        }
        $result = $connection->query($sort_option); 
      ?>

      <?php if($result->num_rows > 0){ ?> 
          <ul>
            <?php while($row = $result->fetch_assoc()){ ?> 
                <li>
                  <div class="program-content" onclick="specificPage(<?php echo $row['id']; ?>);" >
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                    <h3><?php echo $row['name']; ?></h3>
                    <p><b>Date: </b><?php echo $row['date']; ?></p>
                    <p><b>Time: </b><?php echo $row['time']; ?></p>
                    <p><b>Location: </b><?php echo $row['location']; ?></p>
                    <!-- <p><b>Description: </b><?php echo $row['description']; ?></p> -->
                  </div>
                </li>
            <?php } ?> 
          </ul>
      <?php }else{ ?> 
          <p class="status error">Image(s) not found...</p> 
      <?php } ?>
    </div>
    <?php include 'footer.html' ?>
    <script type="module" src="./javascript/autoSlider.js"></script>
    <script>
      function specificPage(rowId) {
        var url = 'specificProgramPage.php?id=' + rowId;
        // window.open(url, '_blank');
        window.location.href = url;
      }
    </script>
  </body>
</html>

