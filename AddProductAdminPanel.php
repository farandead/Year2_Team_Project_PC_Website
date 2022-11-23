<?php
require "PHP/CheckAdminAccess.php";

?>
<html>

<body>
    <form action="">
  <label for="Name">Name:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "50" ><br>
        
  <label for="Price">Price:</label><br>
  <input type="number" id="PricePr" name="PricePr" min="0.01" max = "1000000" ><br><br>
        
  <label for="Discount">Discount:</label><br>
  <input type="number" id="DisPr" name="DisPr" min="0" max="100" ><br><br>
  
     <label for="Cats">Choose a Category:</label>
  <select name="Cats" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </select>
        
   <label for="Mans">Choose a Manufacture:</label>
  <select name="Mans" id="Mans">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </select>
        
        <a> <button type="buttonMan">Add a new manufacture</button> </a>
        
  <input type="submit" value="Submit">
</form> 
</body>
</html>
