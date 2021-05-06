<?php
session_start();
include 'api/curlget.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid.io - Profile</title>

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
      <a class="navbar-brand" href="index.php">Covid.io</a>
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

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/nurses.jpg')">
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
<div class="container">
    <div class="container">
        <!-- Profile widget -->
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="img/profileplaceholder.png" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
               

                    <?php
                        echo $_SESSION["useruid"];
                    
                    ?>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                    </div>
                </div>
            </div>
        
            <div class="px-4 py-3">
                <h5 class="mb-0">Your Profile</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Lives in Plattsburgh, NY</p>
                    <p style="color:green" class="font-italic mb-0">Last Tested: Negative</p><br>
                    <h5 class="font-bold mb-0">Nearest Vaccine Center</h5>
                    <form method="post" action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Zip Code or City" />
                        <button>Search</button>
                        <br>
                </form>
                </div>
                <div class = "float-left">
                    <?php
                    $name = $_POST["name"];
                    echo"<br>";
                    
                    foreach ($decoded->features as $value){
                        if ($decoded->features[$x]->properties->postal_code != $name){
                            $x+=1;
                        }
                        else{
                            print_r($decoded->features[$x]->properties->city);
                            echo "<br>";
                            print_r($decoded->features[$x]->properties->name);
                            echo "<br>";
                            print_r($decoded->features[$x]->properties->address);
                            echo "<br>";
                            $url=$decoded->features[$x]->properties->url;
                            $add=$decoded->features[$x]->properties->address;
                
                            echo "<a href='$url'><button>Schedule Vaccination Here</button></a>";
                            echo "<br>";
                            $x+=1;

                             
            }
        }
        
                ?> 
                </div>
                <div class = "float-right">
                <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgihiQwljxcmNmzv8kJ_m6WaHK8ARy84c&map_ids=55e50092df8f4da0&callback=initMap">
</script>
                <script>
                // Initialize and add the map
                  function initMap() {
                    const map = new google.maps.Map(document.getElementById("map"), {
                      zoom: 4
                    });
                    // The marker, positioned at Uluru
                    const marker = new google.maps.Marker({
                      position: $add,
                      map: map,
                    });
}
                </script>
      </div>
                            
            
        
                </div>
            </div>
            
        </div>
    </div>
</div>