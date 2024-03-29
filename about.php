﻿<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid.io-About Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Covid.io</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li class='nav-item'> <a class='nav-link' href='profile.php'>My Profile</a></li>";
                        echo "<li class='nav-item'> <a class='nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
                    }
                    else {
                        echo "<li class='nav-item'> <a class='nav-link' href='login.php'>Login</a></li>";
                        echo "<li class='nav-item'> <a class='nav-link' href='register.php'>Register</a></li>";
                    }
                    ?>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/VaccineManBoy.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>About Us</h1>
            <span class="subheading">This is what we do.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Covid.io About us page.</h1>
        <p>A small group of software developers that want to help spread awareness of the current health crisis. Covid-19 Live updates and reports of cases.The group of four from the SUNY Plattsburgh students are planing to create a website to help the community to learn and understand better for the current Covid-19 pandamic,
        because there are so many people still been misleading the knowledge how to protect themselves and their families.<br> We decide to make a platform to share the correct informtions
        and give the updating news for the users to looking for informations.</p>
        </p>
        <h2>About Covid-19 Pandemic:</h2>
        <p>Vaccines in New York state are now available to residents aged 30 or older.<br>
        Mask mandate is still in effect. Maximum capacity for outdoor gatherings for private residences is up to 25 peopl
        <br>Symptoms to look out for: headache, fever, cough, muscle aches and more </p>
        <h2>We want to know things from you</h2>
        <p>Hopefully this is the correct way we can do something with the community It's the pleasure that the user are interesting to check our webiste we would happy to hear from your
        what kind of the informations you are looking for about the Covid-19.</p>
        <h3>Our team members for this project</h3>
          <p>Documentation Drafter: Alana Crumbley<br>
              Website Frontend Designer: Hanbo Tan<br>
              Website Backend Developer: Alvyn Velazquez<br>
              Graphic Designer & Software Tester: Scott Price
          </p>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
          <p class="copyright text-muted"> Covid.io 2021</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
