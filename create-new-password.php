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
          <li>
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
            <a class="nav-link" href="info.php">Covid Info</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<main>
    <div class="registerbox">
        <section class="registerbox">
        <h2>Create New Password</h2>
            <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if(empty($selector) || empty($validator)){
                    echo "We couldn't validate your request!";
                } else {
                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
            ?> 

                        <form action="includes/reset-password.inc.php" method="post">
                            <input type="hidden" name="selector" value="<?php echo $selector;?>">
                            <input type="hidden" name="validator" value="<?php echo $validator;?>">
                            <input type="password" name="pwd" placeholder="Enter a new Password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat new Password">
                            <button type="submit" name="reset-password-submit">Reset Password</button>
                        </form>
                        
                        <?php
                    }
                }
            ?>

        </section>
    </div>
</main>
