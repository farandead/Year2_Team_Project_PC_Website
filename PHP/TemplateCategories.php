<?php

//echo $row['Cat_Name'];
echo"
<br>
<br>
<div class=\" devices-sub-container-product \">
                <div class =\"category-details\">
                    <div class=\"category-details-title\">".$row['Cat_Name']."</div>
                    <div class=\"category-details-img1\"><img src=\"../Categories/Images/".$row['Cat_ID'].".png\" width=\"50 px\" height=\"150px\" alt=\"No image\"></div>
                    <div class=\"category-details-description\">
                        <ul class=\"description-ulisted\">
                            <li class=\"description-ulisted-item\">High End </li>
                            <li class=\"description-ulisted-item\">Wide variety of specs</li>
                            <li class=\"description-ulisted-item\">Bargain Prices</li>
                        </ul>
                    </div>
                    <div class=\"category-details-browse-button\">
                        <a href='product_page.php?Category=".$row['Cat_Name']."'><button>Browse ".$row['Cat_Name']." ></button></a>
                    </div>";
if($view==1 and $status=="Admin"){
  echo "<div class=\"product-details-buy-buttons\">
                               <a href=''> EDIT THE ITEM ></a>
                            </div>";
}
echo "
                </div>
            </div>
";
?>
