<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/calendar.css">
</head>
<body>

<?php
  if (isset($_SESSION['login'])){

  echo "Welcome to your personal calendar " . $_SESSION['login'];
	echo "!<br>";
	echo "It is ";
	date_default_timezone_set('Europe/Vienna');
	echo $date = date('H:i', time());
	echo ", ";
	echo $date = date('d/m/Y', time());
	echo ".";
  echo "<br></br>";
  include("myCalendar.inc.php");

  }
  else
  {
  echo "<p><b>If you're not a robot, please Log In.</b><p>";
  }
    
  ?>