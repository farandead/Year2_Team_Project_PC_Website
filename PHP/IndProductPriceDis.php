<?php
$price=round($res['Product_Price']-$res['Product_Price']*$res['Product_Discount']/100,2);


echo "
<div class=\"summary-container price-container dark_target\">
                    <p><strong>£".$price." </strong></p>
                </div>";
if($res['Product_Discount']>0){
echo "
                <div class=\"summary-container price-container dark_target\">
                    <p><strong>£600 </strong>inl. VAT</p>
                </div>";
}

?>
