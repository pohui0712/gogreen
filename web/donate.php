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
    <style>
      body {
        margin: 0;
        background: linear-gradient(#fefae0, #ccd5ae);
        font-family: "Playpen Sans";
      }
      <?php include 'index.css' ?>
      <?php include 'donate.css' ?>
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="grid-template">
      <h1>Green GoProgram</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aperiam,
        incidunt quaerat ea vero voluptate.
      </p>
      <div class="item item-1">
        <img src="images/beach.jpeg" alt="" />
      </div>
      <div class="item item-2">
        <img src="images/beachCleaning.png" alt="" />
      </div>
      <div class="item item-3">
        <img src="images/greenCampaign.jpg" alt="" />
      </div>
      <div class="item item-4">
        <img src="images/kidsRecyclingProgram.png" alt="" />
      </div>
      <div class="item item-5">
        <img src="images/programGridCleanRubbish.jpg" alt="" />
      </div>
      <div class="item item-6">
        <img src="images/programGridCraftTree.jpg" alt="" />
      </div>
      <div class="item item-7">
        <img src="images/schoolCampaign.jpeg" alt="" />
      </div>
      <div class="item item-8">
        <img src="images/together.jpg" alt="" />
      </div>
      <div class="item item-9">
        <img src="images/treePlanting.jpg" alt="" />
      </div>
    </div>

    <div class="donation-content">
      <div class="content-description">
        <h1>One Dollar. One Tree</h1>
        <p>
          Donating money to our organization not only bhelps us to maintain our
          organizational operations but will also be directed towards hosting
          more green events and even investing in tree planting initiatives.
          When you donate online, we consolidate and distribute funds,
          collaborate with partners to grow saplings, and deploy teams for
          planting. We actively monitor the trees' growth progress.
        </p>
        <iframe src="https://www.youtube.com/embed/Y2qf5BTDq2w"> </iframe>
      </div>
      <div class="wrapper">
        <div class="icon-container">
          <i class="fa-solid fa-hand-holding-dollar"></i>
          <span class="num" data-value="400">000</span>
          <span class="text">Total Donation</span>
        </div>
        <div class="icon-container">
          <i class="fa-solid fa-users-rectangle"></i>
          <span class="num" data-value="10">000</span>
          <span class="text">Community Member</span>
        </div>
        <div class="icon-container">
          <i class="fa-solid fa-seedling"></i>
          <span class="num" data-value="200">000</span>
          <span class="text">Tree Plantning</span>
        </div>
        <div class="icon-container">
          <i class="fa-solid fa-award"></i>
          <span class="num" data-value="2">000</span>
          <span class="text">Award Received</span>
        </div>
      </div>
    </div>

    <div class="donate-page">
      <div class="card-information">
        <h2>Payment Information</h2>
        <div class="input-information">
          <label for="donate-amount">AMOUNT</label>
          <input type="text" placeholder="DONATE AMOUNT" />
        </div>
        <div class="input-information">
          <label for="cardholder-name">CARDHOLDER NAME</label><br />
          <input type="text" placeholder="NAME" />
        </div>
        <div class="input-information">
          <label for="card-name">CARD NAME</label><br />
          <input type="text" placeholder="1234 1234 1234 1234" />
        </div>
        <div id="test">
          <div class="input-information">
            <label for="expiration">EXPIRATION</label><br />
            <input type="text" placeholder="MM / YY" />
          </div>
          <div class="input-information">
            <label for="CVC">CVC</label><br />
            <input type="text" placeholder="CVC" />
          </div>
        </div>
        <div class="donate-btn"><button id="hover-btn">DONATE</button></div>
      </div>
    </div>
    <?php include 'footer.html' ?>
    <script type="module" src="./javascript/numberCounting.js"></script>
    <script type="module" src="./javascript/loginPage.js"></script>
  </body>
</html>
