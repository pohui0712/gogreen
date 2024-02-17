<?php
include './php/dbConn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoGreen</title>
    <!-- <link href="index.css" rel="stylesheet" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
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
      <?php include 'index.css'?>
      <?php include 'about.css'?>
    </style>
    <script type="importmap">
      {
        "imports": {
          "three": "https://unpkg.com/three@v0.158.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@v0.158.0/examples/jsm/"
        }
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/split.js/1.6.0/split.min.js"></script>
  </head>
  <body id="non-scroll">

    <?php include 'header.php' ?>

    <section class="home-container" id="blur-homeContainer">
      <div id="text-container">
        <h1 class="animate">Small Effort Great Impact</h1>
        <div class="animate">
          Our efforts to protect the Earth are fundamental to ensuritng the
          continuity of life for ourselves and for the myriad of species that
          share this home with us. Preserving the Earth's natural resources and
          biodiversity is not merely an option but a necessity for sustaining
          the ecosystems that support us. By mitigating the impacts of climate
          change and conserving habitats, we uphold the integrity of our
          environment and secure a healthy planet for future generations.
        </div>
        <br />
        <button id="button">Learn more</button>
      </div>
      <canvas id="model-container"></canvas>
    </section>

    <section class="aboutPage" id="blur-aboutPage">
      <div class="aboutContainer">
        <div class="aboutImage">
          <img src="./images/teams.jpg" />
        </div>
        <div class="aboutText">
          <div class="smallTitle">
            We do our best to beautify the environment
          </div>
          <div class="sentence">
            With a shared vision of a healthier planet, we strive to raise
            awareness, educate, and engage individuals in sustainable practices,
            making a lasting impact on the Earth we call home.We believe in the
            power of collective action to address pressing environmental issues.
            Join us in our efforts to create a world where nature thrives and
            biodiversity flourishes.
          </div>
        </div>
      </div>
    </section>

    <section class="benefitPage" id="blur-benefitPage">
      <div class="grid-container">
        <div class="grid-item">
          <img
            class="icon"
            src="./images/biodiversity.png"
            alt="biodiversityIcon"
          />
          <div class="textWrap">
            <p class="textHeader">Safeguard Biodiversity</p>
            <p class="textContent">
              Protecting forests and oceans helps preserve the diverse habitats
              required by different plants and animals to thrive.
            </p>
          </div>
        </div>
        <div class="grid-item">
          <img class="icon" src="./images/disease.png" alt="diseaseIcon" />
          <div class="textWrap">
            <p class="textHeader">Prevent Disease</p>
            <p class="textContent">
              Protecting the environment ensure cleaner air and water to reduce
              the risk of illnesses.
            </p>
          </div>
        </div>
        <div class="grid-item">
          <img
            class="icon"
            src="./images/climateChange.webp"
            alt="climateIcon"
          />
          <div class="textWrap">
            <p class="textHeader">Mitigate Climate Change</p>
            <p class="textContent">
              Reduces carbon emissions, aiding in combating global warming.
            </p>
          </div>
        </div>
        <div class="grid-item">
          <img class="icon" src="./images/city.png" alt="cityIcon" />
          <div class="textWrap">
            <p class="textHeader">Sustainable Development</p>
            <p class="textContent">
              Ensures the availability of natural resources for future
              generations.
            </p>
          </div>
        </div>
        <div class="grid-item">
          <img class="icon" src="./images/economy.png" alt="economyIcon" />
          <div class="textWrap">
            <p class="textHeader">Boost Economy</p>
            <p class="textContent">
              Creates job opportunities in conservation, renewable energy, and
              eco-friendly sectors.
            </p>
          </div>
        </div>
        <div class="grid-item">
          <img class="icon" src="./images/life.png" alt="lifeIcon" />
          <div class="textWrap">
            <p class="textHeader">Life Quality</p>
            <p class="textContent">
              Provides recreational spaces and natural landscapes for leisure
              and mental well-being.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="spacePage" id="blur-program">
      <div class="h1Space">
        <h1 class="big-program-text">Previous Program</h1>
        <p class="small-program-text">
          We make every efforts to conduct more community services in order to
          convey importance of protecting environment to the world
        </p>
      </div>
      <div class="card-container">
        <div class="card">
          <img class="card-front" src="./images/schoolCampaign.jpeg" />
          <div class="card-back">
            <p class="program-title">School Education</p>
            <p class="program-explain">
              We believe good habits of protecting environment should be
              nurtured since young eventhough a small action can affect
              children's mindset.
            </p>
          </div>
        </div>
        <div class="card">
          <img class="card-front" src="./images/greenCampaign.jpg" />
          <div class="card-back">
            <p class="program-title">Awareness campaigns</p>
            <p class="program-explain">
              Teaching teenagers or students to learn importance of protecting
              environment and raise their awareness by discussing environmental
              controversies and ethical dilemmas.
            </p>
          </div>
        </div>
        <div class="card">
          <img class="card-front" src="./images/treePlanting.jpg" />
          <div class="card-back">
            <p class="program-title">Tree Planting in school</p>
            <p class="program-explain">
              Encouraging activities like gardening, picking up litter, and
              learning about endangered species not only raises awareness but
              also cultivates a sense of responsibility towards our environment.
            </p>
          </div>
        </div>
        <div class="card">
          <img class="card-front" src="./images/beach.jpeg" />
          <div class="card-back">
            <p class="program-title">Beach Cleaning</p>
            <p class="program-explain">
              Beach cleaning helps protect wildlife, prevents pollution of the
              ocean, and maintains a healthy marine environment because litter
              on beaches can harm marine life, disrupt ecosystems
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="spacePage" id="blur-contact">
      <h1 class="h1Space">GET IN TOUCH!</h1>
      <div class="all">
        <div class="contact-container">
          <form action="./php/send_email.php" method="post">
            <input type="name" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <textarea
              type="message"
              rows="10"
              cols="30"
              placeholder="Tell us what you think"
            ></textarea>
          <button id="submitButton" name="submit">Submit</button>
          <?php 
            if(isset($_SESSION['success_message'])) {
              echo '<script> alert("' . $_SESSION['success_message'] . '"); </script>';
              unset($_SESSION['success_message']);
            }
            if(isset($_SESSION['error_message'])) {
              echo '<script> alert("' . $_SESSION['error_message'] . '"); </script>';
              unset($_SESSION['success_message']);
            }
            ?>
        </form>
      </div>
        <div class="image-container">
          <img src="./images/together.jpg" />
        </div>
      </div>
    </section>

    <?php include 'footer.html' ?>

    <script type="module" src="./javascript/earthModel.js"></script>
    <script type="module" src="./javascript/blurbackground.js"></script>
    <script type="module" src="./javascript/loginPage.js"></script>
    <script>
        document.getElementById("button").addEventListener("click", function() {
            document.getElementById("blur-contact").scrollIntoView({ behavior: "smooth" });
        });
    </script>
  </body>
</html>
