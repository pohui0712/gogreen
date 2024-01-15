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
    <title>GoGreen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        font-family: "Playpen Sans";
      }
      <?php include 'index.css' ?>
      <?php include 'about.css' ?>
    </style>
  </head>
  <body id="non-scroll">
    <section class="aboutPage" id="blur-aboutPage">
      <div>
        <div class="background">
          <div class="text-overwrite">
            <h2 class="aboutTitle">Who We Are</h2>
            <h1>
              We Encourage Community to Participate In Conserving And Preserving
              Environment
            </h1>
            <p class="aboutParagraph">
              We are a dedicated group of passionate volunteers committed to
              catalyzing positive change in our communities by spearheading
              efforts to protect and preserve the environment. With a shared
              vision of a healthier planet for current and future generations,
              we have united to serve as leaders and advocates for environmental
              stewardship. Our diverse backgrounds, expertise, and unwavering
              enthusiasm empower us to educate and inspire everyone to take
              safeguard our natural world. Through collaborative initiatives,
              educational campaigns, and grassroots movements, we strive to
              cultivate a culture of environmental awareness and action,
              encouraging everyone to contribute in their unique ways.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="page">
      <h1>Our Team</h1>
      <div class="aboutCard">
        <div class="card-content">
          <div class="about-card-image">
            <img class="card-image" src="./images/personal.jpeg" />
            <h3>Jornathan</h3>
            <p class="position">Founder</p>
          </div>
        </div>
        <div class="card-content">
          <div class="about-card-image">
            <img class="card-image" src="./images/person.jpeg" />
            <h3>Christopher</h3>
            <p class="position">Co-Founder</p>
          </div>
        </div>
        <div class="card-content">
          <div class="about-card-image">
            <img class="card-image" src="./images/man.jpeg" />
            <h3>Alan</h3>
            <p class="position">Product manager</p>
          </div>
        </div>
        <div class="card-content">
          <div class="about-card-image">
            <img class="card-image" src="./images/professional.jpeg" />
            <h3>Mikee</h3>
            <p class="position">Business analyst</p>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.html' ?>
  </body>
</html>
