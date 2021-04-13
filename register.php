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
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-linke" href ="info.html">Covid Info</a>
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
            <h1>Register</h1>
            <span class="subheading">Create a Personal Account to Find Vaccination Sites. </span>
          </div>
        </div>
      </div>
    </div>
  </header>
  

  <body>
    <section class="container">
        <h2>Covid.io Registration</h2>
        <div class="form-group">
        <form action="includes/register.inc.php" method="post">
            <input type="text" class="form-control" name="name" placeholder="Full Name" />
            <input type="text" class="form-control" name="email" placeholder="Enter a Valid Email" />
            <input type="text" class="form-control" name="uid" placeholder="Username" />
            <input type="password" class="form-control" name="pwd" placeholder="Password" />
            <input type="password" class="form-control" name="pwdrepeat" placeholder="Repeat Password" />
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </div>
        <?php
        if (isset($_GET["newpwd"])){
            if($_GET["newpwd"] == "passwordupdated"){
                echo '<p class="signupsuccess">Your password has been reset!</p>';
            }
        }
        ?>
        <a href="login.php" class="alreadyhave">Already have an account? Log in.</a>
        <a href="reset-password.php">Forgot your password? </a>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if ($_GET["error"] == "passwordmismatch"){
                echo "<p>Passwords don't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken"){
                echo "<p>Username already exists, try again!</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p>You're signed up</p>";
            }
    
        }
        ?>
      


      </div>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
          <p class="copyright text-muted">Covid.io 2021</p>
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
