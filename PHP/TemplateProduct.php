<?
$price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);

echo "<div class=\"devices-sub-container-product\">
                        <div class=\"productdetails dark_target\">
                            <div class=\"product-details-title\">".$row['Product_Name']."</div>
                            <div class=\"product-details-img\"><img src=\"img/Lafife Pro 15 6.webp\" alt=\"\"></div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>".$price."£</span> ";
                                if($row['Product_Discount']!=0){
                               echo ",discount is ".$row['Product_Discount']."% (<s>.$row['Product_Price'].</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">
                                    <li class=\"description-ulisted-item\">PCS 3601 CASE</li>
                                    <li class=\"description-ulisted-item\"> Intel® Core™ i3-10100</li>
                                    <li class=\"description-ulisted-item\">GIGABYTE B560 HD3 (rev. 1.0)</li>
                                    <li class=\"description-ulisted-item\"> 8GB PCS PRO DDR4 2666MHz</li>
                                    <li class=\"description-ulisted-item\">2GB GEFORCE GT 1030 - DVI, HDMI</li>
                                </ul>
                            </div>
                            <div class=\"product-details-buy-buttons\">
                                <button>CONFIGURE THIS PC ></button>
                            </div>
    
                        </div>
                    </div>";
?>
