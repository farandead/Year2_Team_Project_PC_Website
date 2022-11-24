<?php
if (isset($_POST['submitPr'])){
  ob_start();
  
  $NamePr=$_POST['NamePr'];
  $PricePr=$_POST['PricePr'];
  $DisPr=$_POST['DisPr'];
  $Cats=$_POST['Cats'];
  $Mans=$_POST['Mans'];
  $Predescription=$_POST['Predescription'];
  $Predescription=array_values(array_filter(explode(PHP_EOL, $Predescription)));
  $Points=$_POST['Points'];
  $Description=$_POST['Description'];
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
    print_r($Predescription);
    echo "---------<br>";
     echo $Points;
    echo "---------<br>";
     echo $Description;
  
}

//header("Location: ../AddProductAdminPanel.php");

?>
