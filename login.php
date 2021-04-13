

<head>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Covid.io</title>

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
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log-In</a>
        </li>
        <li class="nav-item">
            <a class="nav-linke" href ="info.html">Covid Info</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/shotimage.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Covid.io</h1>
          <span class="subheading">Stay Healthy, Stay Safe</span>
        </div>
      </div>
    </div>
  </div>
</header>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/clean-login.css" />
</head>
<body>
    <section class="registerbox">
        <h2>Covid.io Login</h2>
        <div class="registerbox">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email" />
            <input type="password" name="pwd" placeholder="Password" />
            <button type="submit" name="submit">Log In</button>
            <button type="register.php">Sign up</button><br>
            <button type="reset-password.php">Forgot password </button>
        </form>
        </div>
        

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect Login Information</p>";
            }
            
        }
        ?>
    </section>
</body>


</html>
