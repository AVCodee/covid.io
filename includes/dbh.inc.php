<?php

$serverName = "sv100.ifastnet.com";
$dBUsername = "covidioi_avela011";
$dBPassword = "aZhrdiZv4M9QqQY";
$dBname = "covidioi_covidio";
 
//$serverName = "localhost";
//$dBUsername = "root";
//$dBPassword = "";
//$dBname = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}