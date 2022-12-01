<?php ob_start(); 
require "PHP/StatusSetter.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP -Your One Stop Source of Digital Needs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/product_page.css">
    <script src="js/toggle_switch.js"></script>
    <script src="js/about_us.js"></script>
    <script>

    </script>

</head>



<body  class="dark_target" >

    <?php require 'header.php'; ?>

    <div class="main-container-product-details-page">

        <div class="sub-container-product-details-page sub-container-product-details-page-heading ">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
            <?php 
            
            $category=$_GET["Category"];
            if($category==null){
                header('Location: index.php');
                exit();
            }
                echo "<h1>".$category."</h1>";
                require "PHP/AdminviewPr.php";
            
            ?>
                
        </div>
        <div class="sub-container-product-details-page dark_target">

           
            <div class="devices-container-laptop " id="laptop_container" style="display:block">
                <?php
                require "PHP/ProductsCollectionPrinter.php";
                ?>
                
            </div>
        </div>
        

    </div>

    <?php require 'footer.php'; ?>
</body>

</html>
