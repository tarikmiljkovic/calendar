<?php

  session_start();
  $passwordold=htmlspecialchars($_POST['passwordold']);
  $newpwd=htmlspecialchars($_POST['newpwd']);
  
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
  
  $userlogin = $_SESSION['login'];
  
  // prepare sql and bind parameters
  $stmt = $pdo->prepare("SELECT `password` FROM `User-credentials` WHERE `password` =:passwordold AND `Nick` =:login");
  $stmt->bindValue(':passwordold', $passwordold);
  $stmt->bindValue(':login', $userlogin);
  echo "<br></br>";
  $stmt->execute(); 
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
    
    if ($passwordold == $user['password']){
    
    $stmt = $pdo->prepare("UPDATE `User-credentials` SET password = :newpwd WHERE Nick = :login");
    $stmt->bindValue(':login', $userlogin);   
    $stmt->bindValue(':newpwd', $newpwd);
    $stmt->execute();
    header("Location: index.php"); 
    include ('profile.inc.php'); //Does not work - should be displayed if old pw is correct or not..
    echo "Credentials updated";
    }else{
     header("Location: index.php");
     echo "Sry, your old password is wrong";
     include ('profile.inc.php');
    }
  $pdo = null;
  //header("Location: index.php");
?>