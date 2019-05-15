<?php
   //Database Connect
  define('MYSQL_USER', 'root'); //Username is root
  define('MYSQL_PASSWORD', ''); //No password set
  define('MYSQL_HOST', 'localhost'); //Database runs on local host
  define('MYSQL_DATABASE', 'Calendar'); //Database Name is webtech
  $pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
  );
 
  $pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, 
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $pdoOptions //Options
  );
  
  $stmt = $pdo->prepare("SELECT Text, Type, Name, ID FROM `calendar-entries` WHERE UserID = $_SESSION['userID'];"); 
  $stmt->execute();
  $array = $stmt->fetchAll( PDO::FETCH_ASSOC ); //Fetch all datas from the table
  $json = json_encode( $array ); //Convert associative Array into json
  echo $json; //Send back the data to the caller
  $pdo = null;
?>
    