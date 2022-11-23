<?php
require "PHP/CheckAdminAccess.php";

?>
<html>

<body>
    <form action="">
  <label for="Name">Name:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "50" ><br>
  <label for="Price">Price:</label><br>
  <input type="number" id="PricePr" name="PricePr" min="0.01" ><br><br>
  <label for="Discount">Discount:</label><br>
  <input type="number" id="DisPr" name="DisPr" min="0" max="100" ><br><br>
        
        
  <input type="submit" value="Submit">
</form> 
</body>
</html>
