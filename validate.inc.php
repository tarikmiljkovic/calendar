<?php
  //Use htmlspecialchars in order to prevent XSS Attacks!!!
  $userlogin=htmlspecialchars($_POST['username']);
  $password=htmlspecialchars($_POST['password']);
  
  // Pls. add here your Username/Password Validation either through DB or through File
  /*define('MYSQL_USER', 'root');
  define('MYSQL_PASSWORD', '');
  define('MYSQL_HOST', 'localhost');
  define('MYSQL_DATABASE', 'webtech');
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
  $sql = "SELECT id, username, password FROM users WHERE username = :username";
  $stmt = $pdo->prepare($sql);
  //Bind value. Always work with bind values in order to prevent SQL-injection attacks!
  $stmt->bindValue(':username', $userlogin);
  $stmt->execute();
  //Fetch row.
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  //If $row is FALSE.
  if($user === false){
    echo "<h2>Sorry, wrong User Name</h2>\n";
    //header("Location: index.php");
  } else {
    //User found, so check password and set $_SESSSION[login] if succesfull      
    //Note: I used plain text password
    if ($password == $user['password']){    
      echo "<h2>Welcome " . $userlogin . " to the program </h2>\n";
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $userlogin;
      //header("Location: index.php");     
    } else {
      echo "<h2>Sorry, wrong Password</h2>\n";
      //header("Location: index.php");
    }
  }*/
  //Hardcoded password verification
  
  if ($userlogin==="Alex" && $password=="1050") {
      echo "<h2>Welcome " . $userlogin . " to the program </h2>\n";
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $userlogin;
      header("Location: index.php");
  }
  elseif ($userlogin==="Musti" && $password=="1060") {
      echo "<h2>Welcome " . $userlogin . " to the program </h2>\n";
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $userlogin;
      header("Location: index.php");
  }
  elseif ($userlogin==="Ruffy" && $password=="1100") {
      echo "<h2>Welcome " . $userlogin . " to the program </h2>\n";
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $userlogin;
      header("Location: index.php");
  }
  elseif ($userlogin==="Tarik" && $password=="1234") {
      echo "<h2>Welcome " . $userlogin . " to the program </h2>\n";
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $userlogin;
      header("Location: index.php");
  }
  else {
      echo "<h2>Sorry, login incorrect</h2>\n";
      // header("Location: index.php");
  }
?>
  
