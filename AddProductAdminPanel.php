<?php
require "PHP/CheckAdminAccess.php";
require "PHP/connect_db.php";

//SQL For Mans
$queryMans=mysqli_query($conn,"SELECT * FROM Manufacture");

//SQL For Cats
$queryCats=mysqli_query($conn,"SELECT * FROM Category");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/addPagemainpage.css">
    <style>
        .form_box>div{
            width: 32%;
        }
        .form_box>div>form>h3{
            font-family: Impact;
        }
    </style>
</head>
<body>
    <header class="navigationBar" id="navigationLightMode">
    <ul id="navbar">
        <div id="logoblock">
            <a href="mainpage.php" class="link">
                <p id="logoMovie" style="color:white">LOGO</p>
            </a>
        </div>
        <div id="linksblock">
            <li class="navbaritem"><a class="link" href="filmPage.html">DESKTOP PCs</a></li>
            <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
            <li class="navbaritem"><a class="link" href="contact_us.html">CONTACT US</a></li>
            <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
        </div>
        <div id="membershipblock">
            <li><i id="toggle_button_dark" class="bi bi-moon" onclick="myFunction()"></i>
                <i id="toggle_button"
                   style="display: flex;" class="bi bi-brightness-high-fill" onclick="myFunction()"></i>
            </li>
            <br>
            <br>
            <li>
                <a class="searchLogo" class="link" href="">
                    <i class="fa fa-search" style="font-size: xx-large;color:white"></i>
                </a>
            </li>
        </div>
    </ul>
</header>
    <div class="form_box">
    <div>
    
    
    <form action="PHP/AddNewProductAction.php" method="post">
        
         <h3>Add a new product</h3>
        
  <label for="Name">Name:</label><br>
  <input type="text" id="NamePr" name="NamePr" maxlength= "50" required  ><br><br>
        
  <label for="Price">Price:</label><br>
  <input type="number" id="PricePr" name="PricePr" min="0.01" max = "1000000" required ><br><br>
        
  <label for="Discount">Discount:</label><br>
  <input type="number" id="DisPr" name="DisPr" min="0" max="100" required ><br><br>
  
     <label for="Cats">Choose a Category:</label>
  <select name="Cats" id="Cats" required >
      <option value="" selected disabled>Select</option>
      <?php
      while($row=mysqli_fetch_assoc($queryCats)){
        echo "<option value=\" ".$row['Cat_ID']."\"> ".$row['Cat_Name']."</option>";
      }
      ?>

  </select><br><br>
        
   <label for="Mans">Choose a Manufacture:</label>
  <select name="Mans" id="Mans" required >
       <option value="" selected disabled>Select</option>
  <?php
      while($row=mysqli_fetch_assoc($queryMans)){
        echo "<option value=\" ".$row['Man_ID']."\"> ".$row['Man_Name']."</option>";
      }
      ?>
  </select><br><br>
        
      
        
        
  <input type="submit" name="submitPr" value="Add new product">
</form> 
        
     </div>
    <div>
        
 <form action ="PHP/AddNewManAction.php" method="post">
     <h3>Add a new manufacture</h3>
     
       <label for="Name">Name:</label><br>
  <input type="text" id="NameMan" name="NameMan" maxlength= "20" required  ><br><br>
     
       <label for="Link">Link:</label><br>
  <input type="text" id="LinkMan" name="LinkMan" maxlength= "50" required  ><br><br>
     
     <input type="submit" name="submitMan" value="Add a new manufacturer">
    </form>
     </div>
    <div>
     <form action ="PHP/AddNewCatAction.php" method="post">
     <h3>Add a new category</h3>
         
       <label for="NameC">Name:</label><br>
  <input type="text" id="NameCaT" name="NameCat" maxlength= "20" required  ><br><br>
     
 
     <input type="submit" name="submitCat" value="Add a new category">
    </form>
       </div>
</div>
<section class="footerMenu">
    <div class="footer-menu-sub-container">
        <div class="footer-menu-sub-container-box">
            <h2>LOGO</h2>
        </div>
        <div class="footer-menu-sub-container-box">
            <p>Manufacturer of performance custom computers and laptops. Customise your ideal gaming PC or laptop
                using our advanced configurator.</p>
        </div>
        <div class="footer-menu-sub-container-box">
            <span>Contact Us</span>
            <h3> 0333 011 7000 | Open Now</h3>
        </div>
        <div class="footer-menu-sub-container-box"><img src="img/UK_Payment Logos_Footer.webp" alt=""></div>
    </div>
    <div class="footer-menu-sub-container-links">

        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">Terms & Conditions</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Privacy and Legal</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Corporate Responsibility</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Disclaimer</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Site Map</a>
                </li>
            </ul>
        </div>
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">Contact Us</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Returns Poicy</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Warranty</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">FAQs</a>
                </li>

                <li class="footerMenu__listItem">
                    <a href="" class="link">Right to Cancel</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Payment Options</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Vacancies</a>
                </li>
            </ul>
        </div>
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">About us</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Careers</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Corporate Events</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Why buy from us</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Our Service</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Finance</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Testimonials</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link"><strong>COMPUK</strong> terms</a>
                </li>

            </ul>
        </div>

    </div>
</section>
<footer class="legalFooter">
    <div class="legalFooter__description">
        <p>© <STrong>COMPUK</STrong> Cinemas Limited 2019 to 2022. All rights reserved</p>
    </div>
    <div class="legalFooter_socialIcons">
        <img src="img/facebook.png" alt="">
        <img src="img/instagram.png" alt="">
    </div>

</footer>
</body>
</html>
