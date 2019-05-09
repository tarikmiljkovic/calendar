  
  <div class="topnav" id="Topnav">
  <a href="index.php?content=myCalendar">My Calendar</a>
  
  <!-- define dropdown button for entry creation -->
  <div class="dropdown">
    
    <!-- "myFunction() needs to be linked !! /js/Topnav.js -->
    <a href="#" onclick="myFunction()" class="dropbtn">Create Entry</a>
      <!--<i class="fa fa-caret-down"></i>-->
    <div id="myDropdown" class="dropdown-content">
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
  </div>
  </div>
    <!-- define dropdown button for settings -->
  <div class="dropdown">
    <a href="#" class="dropbtn">Settings
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <form id="sendSettings" method="post" action="savesettings.php">
                </tr>
                <tr>
                    <th><h5><b>View</b></h5></th>
                    <td>
                    <input name="radio1" type="radio" value="Day" />Day<br>
                    <input name="radio2" type="radio" value="Week" />Week<br>
                    <input name="radio3" type="radio" value="Month" />Month<br>
                    </td>
        
                    <td>
                    <input name="option4" type="checkbox" />Shared entries<br>
                    <input name="option5" type="checkbox" />Holidays<br>
                    <input name="option6" type="checkbox" />Personal entries<br>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Save">
            </form>
    </div>
   </div>
<a href="index.php?content=logout">Log Out</a>

