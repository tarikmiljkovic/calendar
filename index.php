<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>Calendar App</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
}
/* Style the header */
.header {
  background-color: #549AFE; /*original color white #f1f1f1*/
  padding: 1px;
  text-align: center;
}
/* Style the topnavigation bar*/
.topnav {
  overflow: hidden;
  background-color: black; /*original color #333*/
}
/* Style the topnavigation bar*/
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 15px; /*14px 16px*/
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: red;
  color: black;
}

/* Create three unequal columns that floats next to each other 
.column {
  float: left;
  padding: 10px;
} */
/* Left and right column 
.column.side {
  width: 25%;
}*/

/* Middle column position*/
.column.middle {
  width: 100%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
    float: none;
  }
}
/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(2n){background-color: #f2f2f2}
  th {
    background-color: #4CAF50;
    color: white;
  }
 /*Input box for Username*/
  input[type=text], select {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
/*Input box for password*/
  input[type=password], input[type=email], input[type=url], select {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
/*Log In - submit button*/
input[type=submit] {
  width: auto;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a050;
}

input[type=button] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px;
  border-radius: 3px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
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
  
  <!-- Side columns not necessary?
  <aside class="column side">
    <h2>Side</h2>
    <p>You can add some additional text here ...</p>
  </aside>
  -->
  
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
  
  <!-- Side columns not necessary?
  <aside class="column side">
    <h2>Side</h2>
    <p>Add here some banners, advertisments interesting stuff ...</p>
    <p>Content could be added via PHP-include</p>
  </aside>
  -->
  
</div>
<footer class="footer">
<img src="cal_logo.png" style="width:244px;height:244px"	;>
  <p>Created by Dag Mustafa, Rauschnick Alexander, Vanicek Rafael and Miljkovic Tarik</p>

</body>
</html>
