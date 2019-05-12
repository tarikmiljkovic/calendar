<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/calendar.css">
</head> 
<body>

<h2>Create Entry</h2>

<form id="createEntry" method="post" action="saveEntryDB.php">  
  Text <input type="text" id="text" name="text" required>
  <br><br>
  Date: <input type="date" id="date" name="date" value="2019-01-01" min="2018-01-01" required>
  <br><br>
  Time: <input type="time" id="time" name="time" value="HH:mm" min="00:00" max="23:59" required>
  <br><br>
  Type:
  <input type="radio" name="type" id="type" value="private" required>private
  <input type="radio" name="type"  id="type" value="public" required>public
  <input type="radio" name="type"  id = "type" value="to do" required>to do  
	<br><br>
  <input type="submit" id="saveEntry" value="Submit">
</form>


