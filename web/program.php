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
    <link rel="stylesheet" href="program.css" />
    <style>
      body {
        margin: 0;
        font-family: "Playpen Sans";
        /* box-sizing: border-box; */
      }
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

    <div class="filter-section">
      <h4 id='result-counter'>
        Showing 1 -
        <span id='total-count'>9</span>
        of
        <span id='total-redult'>9</span>
        Result
      </h4>

      <div class='sortOption-container'>
        <option value="Default">Default</option>
        <option value="highToLow">Sort by price: high to low</option>
        <option value="lowToHigh">Sort by price: low to</option>
      </div>
    </div>

    <div class="program-grid">
      <div class="program program-1">
        <img src="images/beach.jpeg" alt="" />
      </div>
      <div class="program program-2">
        <img src="images/beachCleaning.png" alt="" />
      </div>
      <div class="program program-3">
        <img src="images/greenCampaign.jpg" alt="" />
      </div>
      <div class="program program-4">
        <img src="images/kidsRecyclingProgram.png" alt="" />
      </div>
      <div class="program program-5">
        <img src="images/programGridCleanRubbish.jpg" alt="" />
      </div>
      <div class="program program-6">
        <img src="images/programGridCraftTree.jpg" alt="" />
      </div>
      <div class="program program-7">
        <img src="images/schoolCampaign.jpeg" alt="" />
      </div>
      <div class="program program-8">
        <img src="images/together.jpg" alt="" />
      </div>
      <div class="program program-9">
        <img src="images/treePlanting.jpg" alt="" />
      </div>
    </div>
    <script type="module" src="./javascript/autoSlider.js"></script>
  </body>
</html>

