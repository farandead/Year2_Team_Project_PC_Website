<div class="navigation-bar"  id="navigationLightMode">
        <div class="navigation-logo">

         <a class="link" style="text-decoration-line: none;" href="index.php"><img class="img-logo" src="img/Logo1.png" alt="Logo"></a>

        </div>
        <div class="navigation-menu">
            <ul>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Desktop%20pc">
                        <p>Desktops PCs</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="product_page.php?Category=Gaming%20Laptops">
                            <p>Laptops</p>
                </a></li>
                <li class="navbaritem"><a class="link" href="about_us.php">
                        <p>About Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="contact_us.php">
                        <p>Contact Us</p>
                    </a></li>
                <li class="navbaritem"><a class="link" href="#">
                        <p>Reviews</p>
                    </a></li>
            </ul>

        </div>
        <div class="navigation-icons">

            <ul>
                    <li><i id="toggle_button_dark" class="bi bi-moon" onclick="darkModeProduct()"></i></li> 
                    <li><i id="toggle_button"style="display: flex;color:white;" class="bi bi-brightness-high-fill" onclick="darkModeProduct()"></i></li>
                    <li><i class="fa fa-cart-arrow-down" style="font-size: xx-large;color:white"></i></li>
                    <li>
                             <?php if (isset($_SESSION['login'])){ ?>
                        <div class="dropdown">
                           <a class="link sign-in-logo dropdown-toggle" type="link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="bi bi-person-fill" style="color:white"> </i> 
                            </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="user_page.php">Profile</a>
                            <a class="dropdown-item" href="PHP/signOut.inc.php">Log Out </a> 
                          </div>
                      </div>
                <?php
}else {
    ?>
                <a class="sign-in-logolink" href="Sign_up_new.php">
                   <i class="bi bi-person-fill" style="color:white"> </i> 
                 </a>
     <?php } ?>
                    </li>

            </ul>
                
               
        
                
        </div>
                
    </div>
