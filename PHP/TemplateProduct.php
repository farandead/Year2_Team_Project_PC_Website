<?
$lines= file("Products/PreDescription/".$row['Product_ID'].".txt");
$price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);
echo "<div class=\"devices-sub-container-product\">
                        <div class=\"productdetails dark_target\">
                            <div class=\"product-details-title\">".$row['Product_Name']."</div>
                            <div class=\"product-details-img\"><img src=\"data:image/jpg;base64,'.base64_encode( $row['img'] ).'\"/  width=\"150 px\" height=\"150px\" alt=\"No image\">
                            </div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>".$price."£</span> ";
                                if($row['Product_Discount']!=0){
                               echo ",discount is ".$row['Product_Discount']."% (<s>".$row['Product_Price']."£</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">";
                                
foreach($lines as $line){   
                                   echo " <li class=\"description-ulisted-item\">".$line."</li>";
}


                               echo "     
                                </ul>
                            </div>
                            <div class=\"product-details-buy-buttons\">
                               <a href='Product_Description.php?Product=".$row['Product_ID']."'> <button>CONFIGURE THIS ITEM ></button></a>
                            </div>";
if($view==1 and $status=="Admin"){
  echo "<div class=\"product-details-buy-buttons\">
                               <a href=''> EDIT THE ITEM ></a>
                            </div>";
}
echo "
      
                        </div>
                    </div>";
?>
