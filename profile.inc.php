<!DOCTYPTE HTML>
<html>
    <header>
        <h2>Here you can edit your profile Settings, <?php echo $_SESSION['login']?></h2>
        <br></br>
    </header>
    <body>
        <form id="editpwd" method="post" action="profilechangeDB.php">  
            Old password <input type="password" id="passwordold" name="passwordold" required>
            <br><br>
            New password <input type="password" id="newpwd" name="newpwd" required>
            <br><br>
            <input type="submit" id="editpwdsubmit" value="Change password">
        </form>
    </body>
</html>