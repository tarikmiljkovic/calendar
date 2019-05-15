
<link rel="stylesheet" href="css/main.css">

  <div class="topnav" id="Topnav">
  <a href="index.php?content=myCalendar">My Calendar</a>
  <!-- define dropdown button for entry creation -->
  <div class="dropdown">
    <a href="#" onclick="myFunction()" class="dropbtn">Create Entry</a>
    <div id="myDropdown" class="dropdown-content">
      <?php include("createEntry.inc.php"); ?>
   </div>
  </div>
  <!-- define dropdown button for settings -->
  <div class="dropdown">
  <a href="#" onclick="myFunction1()" class="dropbtn">Settings</a>
    <div id="myDropdown1" class="dropdown-content">
      <?php include("settings.inc.php"); ?>
    </div>
  </div>
<a href="index.php?content=profile">Profile</a>
<a href="index.php?content=logout">Log Out</a>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

/* Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
*/
</script>
