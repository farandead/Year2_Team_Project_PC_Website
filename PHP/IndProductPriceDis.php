<?php
$price=round($res['Product_Price']-$res['Product_Price']*$res['Product_Discount']/100,2);


echo "
<div class=\"summary-container price-container dark_target\">
                    <p><strong>£".$price." </strong></p>
                </div>";
if($res['Product_Discount']>0){
echo "
                <div class=\"summary-container price-container dark_target\">
                    <p><strong>discount is ".$res['Product_Discount']."%  </strong>(<s>£".$res['Product_Price']."</s>)</p>
                </div>";
}

?>
