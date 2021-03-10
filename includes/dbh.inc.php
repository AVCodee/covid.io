<?php

$serverName = "sql304.epizy.com";
$dBUsername = "epiz_28122589";
$dBPassword = "AD8MnZcTbN82T";
$dBname = "epiz_28122589_covidio";
 
//$serverName = "localhost";
//$dBUsername = "root";
//$dBPassword = "";
//$dBname = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}