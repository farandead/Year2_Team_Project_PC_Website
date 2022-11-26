<?php session_start(); 
//include '/home2/babimors/comp-uk.motorsfeere.com/';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie -Your One Stop Source of Unlimited Movies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">


    <link rel="stylesheet" href="css/slidshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="js/toggle_switch.js"></script>
   

</head>

<?php //include '/header.php'; ?>
<!-- font-family: 'Staatliches', cursive; -->
<!-- font-family: 'Russo One', sans-serif; -->


<body>
    <?php require 'header.php'; ?>

    <div class="mainbox-container dark_target" id="main_body">
        <div class="mainbox-container-1">
            <section class="bannerContainer">


                <div class="slider-frame">
                    <div class="slide-images">
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slidshow1.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow2.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow3.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slidshow1.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                        <div class="img-container" style="height: 780px; width: 980px; ;">
                            <img src="img/slideshow3.jpg" alt="" class="bannerImages" name="bannerImages">
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="bannerTextContainer">

                    <p id="bannerText">
                        LEADING THE WAY IN BESPOKE PC SYSTEMS AND LAPTOP GAMING
                        <br>
                        <a href="categories.php"> <button class="linkButton">SEE COLLECTIONS</button>
                    </p>

                </div>
                <div>

                    </a>
                </div>


            </section>
        </div>
        <div class="banner-1-container" style="margin-top:-1px ;">

            <div class="banner-1-sub-container">
                <img src="img/homepage-lineup-laptops.png" alt="">
            </div>
            <div class="banner-1-sub-container">
                <div class="banner-1-sub-container-heading">
                    <h1 style="font-family: 'Russo One', sans-serif; ">
                        GAMING LAPTOPS</h1>
                </div>
                <div class="banner-1-sub-container-paragraph">
                    <p
                        style="  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Why buy off-the-shelf? Custom build your ideal laptop here only pay for what you need!
                    </p>

                </div>
                <div class="banner-1-sub-container-button">
                    <a href='product_page.php?Category=Gaming Laptops'><button
                            style="  font-family: 'Russo One', sans-serif;  ">CONFIGURE NOW</button></a>
                </div>
            </div>
        </div>

        <div class="devices-container-heading">
            <h3 id="devices-container-heading-h3" style="font-family: 'Russo One', sans-serif;font-size:19px ">FEATURED
                SYSTEMS</h3>

        </div>

        <div class="change-buttons">
            <button id="laptopChange_Button" onclick="changeToLaptop()">LAPTOPS</button>
            <button id="desktopChange_Button" onclick="changeToDesktop()">DESKTOPS</button>
        </div>



        <div class="devices-container dark_target" id="desktop_container">


            <?php
            //here
             require "PHP/connect_db.php";
            $query=mysqli_query($conn,"SELECT * FROM Product WHERE (Cat_ID = '1' OR Cat_ID = '3') AND Product_Discount > 0");
            require "PHP/ProductsCollectionPrinterIndex.php";
            ?>





        </div>

        <div class="devices-container-laptop dark_target" id="laptop_container">

            <?php
            //here
            require "PHP/connect_db.php";
            $query=mysqli_query($conn,"SELECT * FROM Product WHERE (Cat_ID = '2' OR Cat_ID = '4') AND Product_Discount > 0");
            require "PHP/ProductsCollectionPrinterIndex.php";
            ?>
           
        </div>



        <div class="banner-1-container">
            <div class="banner-1-sub-container">
                <div class="banner-1-sub-container-heading">
                    <h1 style="font-family: 'Russo One', sans-serif; ">CONFIGURE YOUR PC</h1>
                </div>
                <div class="banner-1-sub-container-paragraph">
                    <p
                        style="  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        No matter what PC you're looking to buy - we've got the ideal custom built PC for you!
                    </p>

                </div>
                <div class="banner-1-sub-container-button">
                    <button style="  font-family: 'Russo One', sans-serif;  ">CONFIGURE NOW</button>
                </div>
            </div>
            <div class="banner-1-sub-container">
                <img src="img/homepage-lineup-workstation.png" alt="">
            </div>
        </div>
        <div class="shipping-banner-outer">
            <div class="shipping-banner">
                <div class="shipping-banner-sub-container">
                    <div class="shipping-banner-sub-container-img"><img src="img/delivery-van.png" style="width:100px ;"
                            alt=""></div>
                    <div class="shipping-banner-sub-container-heading">
                        <h3>NEXT DAY PCs</h3>
                    </div>
                    <div class="shipping-banner-sub-container-paragraph">
                        <p>IN STOCK & READY TO SHIP!</p>
                    </div>
                </div>
                <div class="shipping-banner-sub-container">
                    <button>ORDER NOW</button>
                </div>
            </div>
        </div>



    </div>

    <?php require 'footer.php'; ?>


</body>
