<?php
//$lines= file("Products/PreDescription/".$row['Product_ID'].".txt");
$price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);
echo "<div class=\"devices-sub-container-product\">
                        <div class=\"productdetails dark_target\">
                            <div class=\"product-details-title\">".$row['Product_Name']."</div>
                            <div class=\"product-details-img\"><img src=\"../Products/Images/".$row['Product_ID'].".jpg\"  width=\"150 px\" height=\"150px\" alt=\"No image\">
                            </div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>".$price."£</span> ";
                                if($row['Product_Discount']!=0){
                               echo ",discount is ".$row['Product_Discount']."% (<s>".$row['Product_Price']."£</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">";
                                
//foreach($lines as $line){   
                                   echo " <li class=\"description-ulisted-item\"> <h3>Quantity:</h3><h4><input type=\"number\" id=\"quantity\" name=\"quantity\" min=\"1\" max=\"5\"></h4>"."</li>";
//}


                               echo "     
                                </ul>
                            </div>
                            <div class=\"product-details-buy-buttons\">
                               <a href='Product_Description.php?Product=".$row['Product_ID']."'> <button>LOOK UP THIS ITEM ></button></a>
                            </div>
  <div class=\"product-details-buy-buttons\">
                               <a href='Product_Description.php?Product=".$row['Product_ID']."'> <button>REMOVE THIS ITEM ></button></a>
                            </div>";

echo "
      
                        </div>
                    </div>";



?>
