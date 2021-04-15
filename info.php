<?php
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
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
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
          <li class="nav-item">
              <a class="nav-linke" href ="info.php">Covid Info</a>
          </li>
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
            <h1>About Me</h1>
            <span class="subheading">This is what we do.</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>What is Covid-19</h1>
        <p>The Covid-19 is a A highly contagious respiratory disease caused by the SARS-CoV-2 virus. SARS-CoV-2 is thought to spread from person to person through droplets released when an infected person coughs
            , sneezes, or talks. The first Covid-19 cases was discussed in China Wuhan on December 2020 after China report the data and symptoms to WHO(World Health Organization).
             The contries has unusual symptoms has investgate multipule countries has the disease. This is a begining human being knows the global pandamic has started. And so far is a still on going problems for humanity</p>
        </p>
        <h2>The Covid-19 Symptoms</h2>
        <p>The Covid-19 carrier would be appers some symptoms that makes people sick, but some person who has stronger immune system might not shows any symtoms.
            Unfortunately the Covid-19 still has ability to spreading to other contecters. The symptoms as follow:<br>
            Fever or chills<br>
            Cough<br>
            Shortness of breath or difficulty breathing<br>
            Fatigue<br>
            Muscle or body aches<br>
            Headache<br>
            New loss of taste or smell<br>
            Sore throat<br>
            Congestion or runny nose<br>
            Nausea or vomiting<br>
            Diarrhea<br>
            </p>

        <h2>The age different for Covid-19 death rate </h2>
        <p>The researchers discussed relative to the 5—17-year-old age category. Compared with 5—17-year-olds, the rate of death is 45 times higher in 30—39-year-olds
            and 8,700 times higher in 85+-year-olds. Rate compared to 5-17-years-old . Which means older people has more chance to die after get Covid.
        </p>

        <h3>The Covid mutations</h3>
          <p>Viruses constantly change through mutation, and new variants of a virus are expected to occur over time The Covid also following this law. 
            Sometimes new variants emerge and disappear.Other times, new variants emerge and persist.Multiple variants of the virus that causes COVID-19 have been documented 
            in the United States and globally during this pandemic. Those mutation has changed Covid more adapted to the enviroment such as more harder to been detected by immune system
            , more deadly or easier to spreding to others. We currently knows some mutations changed for Covid as follows:<br>
            B.1.1.7: This variant was first identified in the US in December 2020. It was initially detected in the UK.
            This variant is associated with increased transmissibility.<br>
            B.1.351 This variant was first identified in the US at the end of January 2021. It was initially detected in South Africa in December 2020.
            Currently there is no evidence to suggest that this variant has any impact on disease severity.<br>
            P.1 This variant was first detected in the US in January 2021. P.1 was initially identified in travelers from Brazil, who were tested during routine screening at an airport in Japan, in early January.
            There is evidence to suggest that some of the mutations in the P.1 variant may affect its transmissibility and antigenic profile,
            which may affect the ability of antibodies generated through a previous natural infection or through vaccination to recognize and neutralize the virus.<br>
            B.1.427 and B.1.429,These two variants were first identified in California in February 2021 and were classified as VOCs in March 2021.
            Currently there is no evidence that infections with these variants cause more severe disease.

          </p>

          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>


      </div>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
          <p class="copyright text-muted">Copyright &copy; Your Website 2021</p>
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
