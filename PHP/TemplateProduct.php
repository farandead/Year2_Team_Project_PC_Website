<?
$price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);
echo "0";
echo "<div class=\"devices-sub-container-product\">
                        <div class=\"productdetails dark_target\">
                            <div class=\"product-details-title\">".$row['Product_Name']."</div>
                            <div class=\"product-details-img\"><img src=\"../Products/Images/".$row['Product_ID'].".JPG\" alt=\"No image\"></div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>".$price."£</span> ";
                                if($row['Product_Discount']!=0){
                               echo ",discount is ".$row['Product_Discount']."% (<s>".$row['Product_Price']."£</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">";
                                
                                
                                   echo " <li class=\"description-ulisted-item\">PCS 3601 CASE</li>";
                                    
                               echo "     
                                </ul>
                            </div>
                            <div class=\"product-details-buy-buttons\">
                                <button>CONFIGURE THIS PC ></button>
                            </div>
    
                        </div>
                    </div>";
?>
