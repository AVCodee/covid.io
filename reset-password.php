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

  <title>Covid.io-Reset Password</title>

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
              <a class="nav-link" href ="info.html">Covid Info</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image: url('img/VaccineManBoy.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Reset Password</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

    <body>
    <section class="form-group">
        <h2>Covid.io Password Reset</h2>
        <p>You will be sent an e-mail with Password Reset Instructions.</p>
        <form action="includes/reset-request.inc.php" method="post">
            <input type="text" class="form-control" name="email" placeholder="Enter your email address...">
            <button type="submit" class="btn btn-info" name="reset-request-submit">Send Reset Password Email</button>
        </form> 
        <?php
            if(isset($_GET["reset"])){
                if($_GET["reset"] == "success"){
                    echo '<p class="signupsuccess">Check your e-mail!</p>';
                }
            }
        ?>

    </section>
</body>


</html>
