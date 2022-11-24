<?php
require "CheckAdminAccess.php";
if(isset($_GET['Product'])){
  require "connect_db.php";
  //echo "yes";
  $ID=$_GET['Product'];
   $sql = "SELECT Product_Price, Product_Discount, Product_Name FROM Product WHERE Product_ID='$ID'";
  $q=mysqli_query($conn, $sql);
  $result=mysqli_fetch_array($q);
  
    if(!(isset($result['Product_Name']))){
  header("Location: ../index.php");
  }
  
  $price=$result['Product_Price'];
  $Product_Discount=$result['Product_Discount'];
  $Product_Name=$result['Product_Name'];

  echo "<body>";
  echo 
    
        ' <form action ="changePrice.php?Product='.$ID.'" method="post">
     <h3>'.$Product_Name.'</h3>
         
       <label for="Price">Price(£):</label><br>
  <input type="text" id="Price" name="Price" maxlength= "20" required value= "'.$price.'" ><br><br>
     
         <label for="Discount">Discount(%):</label><br>
  <input type="text" id="Discount" name="Discount" max= "100" min="0" required value= "'.$Product_Discount.'" ><br><br>
           
           
         
 
     <input type="submit" name="submitPrice" value="Update the price">
    </form>';
    
  echo "</body>";
 // echo $price;
}
else{
header("Location: ../index.php");
}

?>
