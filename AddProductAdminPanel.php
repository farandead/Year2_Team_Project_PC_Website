<?php
require "PHP/CheckAdminAccess.php";

?>
<html>

<body>
    <form action="">
  <label for="Name : ">First name:</label><br>
  <input type="text" id="NamePr" name="NamePr" ><br>
  <label for="Price : ">Last name:</label><br>
  <input type="number" id="PricePr" name="PricePr" min="0.01" ><br><br>
  <label for="Discount : ">Last name:</label><br>
  <input type="number" id="DisPr" name="DisPr" min="0" max="100" ><br><br>
        
        
  <input type="submit" value="Submit">
</form> 
</body>
</html>
