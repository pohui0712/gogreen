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
      
    </div>
    <script type="module" src="./javascript/autoSlider.js"></script>
  </body>
</html>

