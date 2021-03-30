<?php
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name ="viewport" content="width = device-width, initial-scale=1">
    <meta name="description" content="Protect Yourself and Others with Covid.io" />
    <meta name="author" content="Alvyn Velazquez, Hanbo Tan, Alana, Scott...etc" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;800&display=swap" rel="stylesheet">
    <title>Covid.io</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>
<style>
        body{
            background-image: url('https://assets.awwwards.com/awards/images/2015/04/pattern.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
<body>
    
    <header class ="header">
        <nav>
            <div class="wrapper">
            <a href="/">
                <img src ="img/logo1.png"class="logo" alt="Covid.io"/>
            </a>
            <ul>
                <a href="index.php"class="header__link1">Home</a></li>
                <a href="about.php"class="header__link2">About</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<a href='profile.php'class='header__link3'>My Profile</a></li>";
                        echo "<a href='includes/logout.inc.php'class='header__link3'>Log Out</a></li>";
                    }
                    else {
                        echo "<a href='login.php'class='header__link3'>Login</a></li>";
                        echo "<a href='register.php'class='header__link3'>Register</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <div class="wrapper">
    </header>