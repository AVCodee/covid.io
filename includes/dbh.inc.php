<?php

$serverName = "sql304.epizy.com";
$dBUsername = "epiz_28122589";
$dBPassword = "AD8MnZcTbN82T";
$dBname = "epiz_28122589_covidio";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}