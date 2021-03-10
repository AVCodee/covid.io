<?php


$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}