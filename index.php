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
          <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<a href='profile.php'class='nav-item'>My Profile</a></li>";
                        echo "<a href='includes/logout.inc.php'class='nav-item'>Log Out</a></li>";
                    }
                    else {
                        echo "<a href='login.php'class='nav-item'>Login</a></li>";
                        echo "<a href='register.php'class='nav-item'>Register</a></li>";
                    }
                    ?>
         
          <li class="nav-item">
            <a class="nav-link" href="info.html">Covid Info</a>
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

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Welcome to the Covid.io.</br>
          <p>Providing all Covid.19 live updates and reports!
          If you feel any symptoms Covid Related Get tested today at a local clinic in your area to be sure.</br>
          Feel free to Sign In or Register to Track More Relevant Data Local to You.</br>
          We hope everyone takes the proper precautions to ensure the safety of society .</br>
          Wear a mask.
          Practice social distancing. 
          </p>

      </div>
      </div>
      <section id="latestnews">
        <div class="container">
            <h1>Latest National News on Covid-19</h1>
            <!-- start sw-rss-feed code --> 



<script type="text/javascript"> 
  <!-- 
  rssfeed_url = new Array(); 
  rssfeed_url[0]="http://tools.cdc.gov/podcasts/feed.asp?feedid=183";  
  rssfeed_frame_width="600"; 
  rssfeed_frame_height="260"; 
  rssfeed_scroll="on"; 
  rssfeed_scroll_step="6"; 
  rssfeed_scroll_bar="off"; 
  rssfeed_target="_blank"; 
  rssfeed_font_size="12"; 
  rssfeed_font_face=""; 
  rssfeed_border="on"; 
  rssfeed_css_url="https://feed.surfing-waves.com/css/style2a.css"; 
  rssfeed_title="on"; 
  rssfeed_title_name=""; 
  rssfeed_title_bgcolor="#3366ff"; 
  rssfeed_title_color="#fff"; 
  rssfeed_title_bgimage=""; 
  rssfeed_footer="off"; 
  rssfeed_footer_name="rss feed"; 
  rssfeed_footer_bgcolor="#fff"; 
  rssfeed_footer_color="#333"; 
  rssfeed_footer_bgimage=""; 
  rssfeed_item_title_length="50"; 
  rssfeed_item_title_color="#666"; 
  rssfeed_item_bgcolor="#fff"; 
  rssfeed_item_bgimage=""; 
  rssfeed_item_border_bottom="on"; 
  rssfeed_item_source_icon="off"; 
  rssfeed_item_date="off"; 
  rssfeed_item_description="on"; 
  rssfeed_item_description_length="120"; 
  rssfeed_item_description_color="#666"; 
  rssfeed_item_description_link_color="#333"; 
  rssfeed_item_description_tag="off"; 
  rssfeed_no_items="0"; 
  rssfeed_cache = "699833f4e93bfdd4f18e3078a77ec0a2"; 
  //--> 
  </script> 
  <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
  <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
  <div style="color:#ccc;font-size:10px; text-align:right; width:600px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
  <!-- end sw-rss-feed code -->
          </div>
  
<!-- end sw-rss-feed code -->
        </div>

    </section>
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
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
