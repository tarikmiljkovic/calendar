<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calendar App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
  <h1>Calendar WebApp</h1>
  <p>Sharing is caring!</p>
</header>
<nav class="topnav">
  <?php
    // Include the right Nav-Bar depending if the user is logged in
    if (isset($_SESSION['login'])){
      include("loginnav.inc.php");
    }
    else
    {
      include('nav.inc.php');
    }
  ?>
</nav>
<div class="row">
  
  <main class="column middle" name="Haupt" id="Haupt">
    <?php
      if (isset($_REQUEST['content'])){
        include($_REQUEST['content'].".inc.php");
      }
      else
      {
        include('main.inc.php');
      }
    ?>
  </main>
  
</div>
<footer class="footer">
<img src="cal_logo.png" style="width:244px;height:244px"	;>
  <p>Created by Dag Mustafa, Rauschnick Alexander, Vanicek Rafael and Miljkovic Tarik</p>

</body>
</html>
