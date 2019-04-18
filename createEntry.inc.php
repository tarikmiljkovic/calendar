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
  Date: <input type="integer" id="date" name="date" required>
  <br><br>
  Time: <input type="integer" id="time" name="time" required>
  <br><br>
  Type:
  <input type="radio" name="type" id="type" value="private">private
  <input type="radio" name="type"  id="type" value="public">public
  <input type="radio" name="type"  id = "type" value="to do">to do  
	<br><br>
  <input type="submit" id="saveEntry" value="Create Entry">
</form>

<?php include("myCalendar.inc.php"); ?>
