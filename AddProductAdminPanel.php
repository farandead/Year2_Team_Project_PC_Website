<?php
require "PHP/CheckAdminAccess.php";
require "PHP/connect_db.php";

//SQL For Mans
$queryMans=mysqli_query($conn,"SELECT * FROM Manufacture");

//SQL For Cats
$queryCats=mysqli_query($conn,"SELECT * FROM Category");

while($row=mysqli_fetch_assoc($queryCats)){
echo "1";}
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
      <?php 
      ?>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </select><br><br>
        
   <label for="Mans">Choose a Manufacture:</label>
  <select name="Mans" id="Mans">
      <?php 
      ?>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </select><br><br>
        
        <a> <button type="buttonMan">Add a new manufacture</button> </a><br><br>
        
  <input type="submit" value="Submit">
</form> 
</body>
</html>
