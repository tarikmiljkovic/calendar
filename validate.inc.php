<?php
  //Use htmlspecialchars in order to prevent XSS Attacks!!!
  //"trim" prevents spaces in string and "stripslashes" converts/removes slashes:
  $userlogin=htmlspecialchars(stripslashes(trim($_POST['username'])));
  $password=htmlspecialchars(stripslashes(trim($_POST['password'])));
  $userID = "";
  
  define('MYSQL_USER', 'root');
  define('MYSQL_PASSWORD', '');
  define('MYSQL_HOST', 'localhost');
  define('MYSQL_DATABASE', 'Calendar');
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
  //Retrieve the user account information for the given username.
  $sql = "SELECT Nick,password,userID FROM `User-credentials` WHERE Nick = :username AND password = :password";
  $stmt = $pdo->prepare($sql);
  //Bind value. Always work with bind values in order to prevent SQL-injection attacks!
  $stmt->bindValue(':username', $userlogin);
  $stmt->bindValue(':password', $password);
  // $stmt->bindValue(':userID', $userID);  
  $stmt->execute();
  //Fetch row.
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  //If $row is FALSE.
  
  
  if($user === false){
    echo "<h4>Sorry, wrong credentials</h4>\n";
    include('login.inc.php');
    //header("Location: index.php");
  }elseif ($password == $user['password']){
      /* If credentials correct ->
      Set the Session Cookie in order to identify the user */
      $_SESSION['login'] = $userlogin;
      $_SESSION['userID'] = $user['userID'];
      header("Location: index.php");
      //Display main interface
      include('main.inc.php');
    } else {
        echo "<h2>Sorry, something went wrong :(</h2>\n";
        header("Location: index.php");
    }
?>