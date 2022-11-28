<?php

require "connect_db.php";

$templateRow="";
$sql="SELECT * FROM OrderP WHERE NOT Order_Status ='Basket'";
  $query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query)){
  
  $st1=null;
  $st2=null;
  $st3=null;
  $st4=null;
  
  if($row['Order_Status']=="InProcess"){$st1="selected";}
  elseif($row['Order_Status']=="Shiped"){$st2="selected";}
  elseif($row['Order_Status']=="Delivered"){$st3="selected";}
  elseif($row['Order_Status']=="Declined"){$st4="selected";}
  
  $Products="";
  $sqlPr="SELECT * FROM Linked_Order_and_Products WHERE Order_ID ='".$row['Order_ID']."'";
  $queryPr=mysqli_query($conn, $sqlPr);
  $counter=0;
  
  while($rowPr=mysqli_fetch_assoc($queryPr)){
    $counter++;
    if($counter==1){ $Products=$rowPr['Product_ID'];}else{ $Products= $Products.", ".$rowPr['Product_ID'];}
 
  }
  
  $Address="";
  $sqlAdr="SELECT * FROM Linked_Address_and_Order WHERE Order_ID ='".$row['Order_ID']."'";
  $queryAdr=mysqli_query($conn, $sqlAdr);
  $resAdr=mysqli_fetch_assoc($queryAdr);
  $adrID=$resAdr['Address_ID'];
  
  $sqlAdrD="SELECT * FROM Delivery_address WHERE Address_ID ='".$adrID."'";
  $queryAdrD=mysqli_query($conn, $sqlAdrD);
  $resAdrD=mysqli_fetch_assoc($queryAdrD);
  $Address=$resAdrD['Country'].", ".$resAdrD['City'].", ".$resAdrD['Street'].", ".$resAdrD['ZIP'];
echo "

                <tr>
                  <td>".$row['Order_ID']."</td>
                  <td>".$Products."</td>
                  <td>".$row['User_ID']."</td>
                  <td> ".$row['Order_Status'].": <form action =\"PHP/updateOrderSt.php\" method=\"post\">     
                  
                   <select name=\"Statuses\" id=\"Statuses\" required >
                  <option value=\"InProcess\" ".$st1.">I&#173;n Process</option>
                  <option value=\"Shiped\" ".$st2.">S&#173;hiped</option>
                  <option value=\"Delivered\" ".$st3.">D&#173;elivered</option>
                  <option value=\"Declined\" ".$st4.">D&#173;eclined</option>
                  </select>
                  
                  
                  <input type=\"submit\" name=\"updateStO\" value=\"Update\">
                                  
    </form> 
    </td>
                  <td>".$row['Total_Price']."</td>
                  <td> ".$Address."</td>
              </tr>";
  

}

$conn  -> close();

?>
