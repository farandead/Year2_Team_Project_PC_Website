<head> 
        
 <title>COMPUK -Your One Stop Source of All Digital Needs</title>
</head>

<div class="navigation-bar"  id="navigationLightMode">
        <div class="navigation-logo">

         <a  style="text-decoration: none;" href="index.php"><img class="img-logo" src="img/Logo1.png" alt="Logo"></a>

        </div>
        <div class="navigation-menu">
            <ul>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Desktop%20pc">
                        <p style="color:white">Desktops PCs</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Laptops">
                            <p style="color:white">Laptops</p>
                </a></li>
                <li class="navbaritem"><a class="link" href="about_us.php">
                        <p style="color:white">About Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="contact_us.php">
                        <p style="color:white">Contact Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="#">
                        <p style="color:white">Reviews</p>
                    </a></li>
            </ul>

        </div>
        <div class="navigation-icons">

            <ul>
                    <li><i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i></li> 
                    <li><i id="toggle_button"style="display: flex;color:white;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>
                    <li><a href="ShoppingCart.php"><i class="fa fa-cart-arrow-down" style="font-size: xx-large;color:white"></i></a></li>
                    
<?php if (isset($_SESSION['login'])){ ?>
                    
                    <li><a title="Profile page" href="userprofile.php" class="link sign-in-logo " type="link"  ><i class="bi bi-person-fill" style="color:white"> </i></a></li>
                    <li><a title="Log out"  href="PHP/signOut.inc.php"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
   <?php }else { ?>
                    <li><a class="sign-in-logolink" href="Sign_up_new.php"><i class="bi bi-person-fill" style="color:white"></i></a></li>
     <?php } ?>


            </ul>
                
               
        
                
        </div>
                
    </div>
