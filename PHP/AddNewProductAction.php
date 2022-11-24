<?php
if (isset($_POST['submitPr'])){
  ob_start();
  
  $NamePr=$_POST['NamePr'];
  $PricePr=$_POST['PricePr'];
  $DisPr=$_POST['DisPr'];
  $Cats=$_POST['Cats'];
  $Mans=$_POST['Mans'];
  
//  $Predescription=$_POST['Predescription'];
  //$Predescription = explode("^", $Predescription);
  
//  $Points=$_POST['Points'];
 // $Points = explode("^", $Points);
  
 // $Description=$_POST['Description'];
  echo "---------<br>";  
     echo $NamePr;
  echo "---------<br>";
     echo $PricePr;
  echo "---------<br>";
     echo $DisPr;
    echo "---------<br>";
     echo $Cats;
    echo "---------<br>";
     echo $Mans;
    echo "---------<br>";
   // print_r($Predescription);
   // echo "---------<br>";
   // print_r($Points);
   // echo "---------<br>";
    // echo $Description;
  
 /* $PreDesTXT = fopen("testKirill.txt", "w") or die("Unable to open file!");
  $txt = "Jane Doe\n";
fwrite($PreDesTXT, $txt);
fclose($PreDesTXT);*/
  
  require "connect_db.php";
  
  $sql = "INSERT INTO Product (Product_Name, Product_Discount, Product_Price,Man_ID,Cat_ID)
VALUES ('$NamePr', '$DisPr', '$PricePr','$Mans','$Cats')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   echo '<script type ="text/JavaScript">';  
echo 'alert("New record created successfully")';  
echo '</script>';  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
     echo '<script type ="text/JavaScript">';  
echo 'alert("Error")';  
echo '</script>';  
}

$conn->close();
  
}

header("Location: ../AddProductAdminPanel.php");

?>
