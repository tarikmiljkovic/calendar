<!DOCTYPE html>
<html>

<style>
table {
  border-collapse: collapse;
  border-spacing: 0; 
  width: 20%;
}
th, td {
  text-align: left;
  padding: 5px;
}
</style>

<!-- SHOULD BE ADDED AS SIDE PANEL TO THE CALENDAR, AND NOT DISPLAYED ALONE! -->
    <body>
            <table>
                <tr>
                    <th><h3>View</h3></th>
                    <th><h3>Hide</h3></th>
            <form id="sendSettings" method="post" action="savesettings.php">
                </tr>
                <tr>
                    <td>
                    <input name="radio1" type="radio" value="Day" />Day<br>
                    <input name="radio2" type="radio" value="Week" />Week<br>
                    <input name="radio3" type="radio" value="Month" />Month<br>
                    </td>
        
                    <td>
                    <input name="option4" type="checkbox" />Entries<br>
                    <input name="option5" type="checkbox" />Holidays<br>
                    <input name="option6" type="checkbox" />bla bla bla..<br>
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Save">
            </form>
    </body>
    <!-- ## -->
</html>


