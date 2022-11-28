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
  
echo "

                <tr>
                  <td>".$row['Order_ID']."</td>
                  <td>Items</td>
                  <td>".$row['User_ID']."</td>
                  <td> <form action =\"PHP/updateOrderSt.php\" method=\"post\">     
                  
                   <select name=\"Statuses\" id=\"Statuses\" required >
                  <option value=\"InProcess\" ".$st1.">In Process</option>
                  <option value=\"Shiped\" ".$st2.">Shiped</option>
                  <option value=\"Delivered\" ".$st3.">Delivered</option>
                  <option value=\"Declined\" ".$st4.">Declined</option>
                  </select>
                  
                  
                  <input type=\"submit\" name=\"updateStO\" value=\"Update\">
                                  
    </form> 
    </td>
                  <td>Total ".$row['Total_Price']."</td>
              </tr>";
  

}

$conn  -> close();

?>
