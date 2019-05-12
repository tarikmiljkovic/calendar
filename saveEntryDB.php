<?php

  session_start();
  $text=htmlspecialchars($_POST['text']);
  $date=htmlspecialchars($_POST['date']);
  $time=htmlspecialchars($_POST['time']);
  $type=htmlspecialchars($_POST['type']);
  

  if (isset($_POST['text'])){
    $text=htmlspecialchars($_POST['text']);
  }
  else {
    $text="";
  }
  if (isset($_POST['type'])){
    $type=htmlspecialchars($_POST['type']);
  }
  else {
    $type="";
  }
  
  //Database Connect
  define('MYSQL_USER', 'root'); //Username is root
  define('MYSQL_PASSWORD', ''); //No password set
  define('MYSQL_HOST', 'localhost'); //Database runs on local host
  define('MYSQL_DATABASE', 'Calendar'); //Database Name 
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
  
  $userID = $_SESSION['userID'];
  $userlogin = $_SESSION['login'];
  
  
  // prepare sql and bind parameters
  $stmt = $pdo->prepare("INSERT INTO `calendar-entries` (Text, Date, Time, Type, UserID) 
  VALUES (:text, :date, :time, :type, :userID)");
  $stmt->bindParam(':text', $text);
  $stmt->bindParam(':date', $date);
  $stmt->bindParam(':time', $time);
  $stmt->bindParam(':type', $type);
  $stmt->bindParam(':userID', $userID);
  //Excetute the statement, it. est. insert the row
  $stmt->execute();
  
  
  $pdo = null;
  echo "Entry saved";
  header("Location: index.php");
  
?>