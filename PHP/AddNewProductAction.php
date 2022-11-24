<?php
if (isset($_POST['submitPr'])){
  ob_start();
  
  $NamePr=$_POST['NamePr'];
  $PricePr=$_POST['PricePr'];
  $DisPr=$_POST['DisPr'];
  $Cats=$_POST['Cats'];
  $Mans=$_POST['Mans'];
  $Predescription=$_POST['Predescription'];
  $Points=$_POST['Points'];
  $Description=$_POST['Description'];
  echo "---------";  
     echo $NamePr;
  echo "---------";
     echo $PricePr;
  echo "---------";
     echo $DisPr;
    echo "---------";
     echo $Cats;
    echo "---------";
     echo $Mans;
    echo "---------";
     echo $Predescription;
    echo "---------";
     echo $Points;
    echo "---------";
     echo $Description;
  
}

//header("Location: ../AddProductAdminPanel.php");

?>
