<?php
require "PHP/CheckAdminAccess.php";
require "PHP/connect_db.php";

//SQL For Mans
$queryMans=mysqli_query($conn,"SELECT * FROM Manufacture");

//SQL For Cats
$queryCats=mysqli_query($conn,"SELECT * FROM Category");


?>
<html>

<body>
    <form action="">
        
         <h3>Add a new product</h3>
        
  <label for="Name">Name:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "50" ><br><br>
        
  <label for="Price">Price:</label><br>
  <input type="number" id="PricePr" name="PricePr" min="0.01" max = "1000000" ><br><br>
        
  <label for="Discount">Discount:</label><br>
  <input type="number" id="DisPr" name="DisPr" min="0" max="100" ><br><br>
  
     <label for="Cats">Choose a Category:</label>
  <select name="Cats" id="Cats">
      <option value="0" selected disabled>Select</option>
      <?php
      while($row=mysqli_fetch_assoc($queryCats)){
        echo "<option value=\" ".$row['Cat_ID']."\"> ".$row['Cat_Name']."</option>";
      }
      ?>

  </select><br><br>
        
   <label for="Mans">Choose a Manufacture:</label>
  <select name="Mans" id="Mans">
       <option value="0" selected disabled>Select</option>
  <?php
      while($row=mysqli_fetch_assoc($queryMans)){
        echo "<option value=\" ".$row['Man_ID']."\"> ".$row['Man_Name']."</option>";
      }
      ?>
  </select><br><br>
        
        
        
  <input type="submit" value="Add new product">
</form> 
    
 <form action ="PHP/AddNewManAction.php">
     <h3>Add a new manufacture</h3>
     
       <label for="Name">Name:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "20" ><br><br>
     
       <label for="Link">Link:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "50" ><br><br>
     
     <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
