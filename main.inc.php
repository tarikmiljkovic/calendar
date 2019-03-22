<?php
    if (isset($_SESSION['login'])){
      echo "Welcome to your personal calendar " . $_SESSION['login'];
	echo "!<br>";
	echo "It is ";
	date_default_timezone_set('Europe/Vienna');
	echo $date = date('H:i:s', time());
	echo ", ";
	echo $date = date('d/m/Y', time());
	echo ".";

    }
    else
    {
      echo "<p><b>Please Log In</b><p>";
    }
  ?>