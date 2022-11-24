<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPUK</title>
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
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        
    
    
        <link rel="stylesheet" href="css/slidshow.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <script src="js/toggle_switch.js"></script>
        <script>
    
        </script>
        <style>
            body {
                margin-top: 30px;
                padding: 0%;
                font-family: "Arial", Helvetica, sans-serif;
            }
    
            i {
                font-size: 30px;
                cursor: pointer;
                position: relative;
                ;
            }
        </style>
    
    <!-- font-family: 'Staatliches', cursive; -->
    <!-- font-family: 'Russo One', sans-serif; -->
    
    <body style="background-image: none;">
    
        <header class="container-fluid navigationBar" id="navigationLightMode" style="margin-top: -50px;">
            <div class="row">
            <ul id="navbar">
                <div id="logoblock">
                    <a href="mainpage.html" class="link">
                        <p id="logoMovie" style="color:white">
                            LOGO
    
                        </p>
                    </a>
    
                </div>
                
                <div id="linksblock">
                    <li class="navbaritem"><a class="link" href="filmPage.html">DESKTOP PCs</a></li>
                    <li class="navbaritem"><a class="link" href="#">LAPTOPS</a></li>
                    <li class="navbaritem"><a class="link" href="#">CONTACT US</a></li>
                    <li class="navbaritem"><a class="link" href="#">REVIEWS</a></li>
                </div>
    
                <div id="membershipblock">
    
    
    
                    <li><i id="toggle_button_dark" class="bi bi-moon" onclick="myFunction()"></i> <i id="toggle_button"
                            style="display: flex;" class="bi bi-brightness-high-fill" onclick="myFunction()"></i></li>
    
    
                    <br>
                    <br>
                    <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search"
                                style="font-size: xx-large;color:white"></i> </a></li>
                    <br>
                    <br>
                    <li><a class="sign-in-logo" class="link" href="Sign_up.html"> <i class="bi bi-person-fill"
                                style="font-size: xx-large;color:white"></i> </a></li>
                       
                  
         
                
                </div>
            </div>
            </ul>
            </ul>
            
            <!--Admin Panel-->
        <div class="container-fluid mt-1">
            <div class="row">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 px-4" style="width: 100%;">
        <a href="#" class="navbar-brand">Admin</a>
 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
 
         <div class="collapse navbar-collapse" id="navmenu">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a href="#" class="nav-link">Admin applications</a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">Order management</a>
                 </li>
                 <li class="nav-item">
                     <a href="accounts_base_page.html" class="nav-link">Accounts page</a>
                 </li>
                 
                 
             </ul>
 
         </div>
     </div>
    </nav>
</div>
</div>
</header>

    
    <!--Account Base Page Table-->
       <section class ="table">
        <div class="container1 d-flex justify-content-center align-items-center py-2">
          <div class="row"></div>
          <h1>Accounts Base Page</h1>
        </div>
      </div>

        <div class="container1 mt-5 d-flex justify-content-center align-items-center mt-5 py-5">
          <div class="row"></div>
          <h1>Accounts Base Page</h1>
        </div>
      </div>
  
    <div class="container2 me-4 ms-4">
      <div class="row">
            <table id="example" class="table table-striped" style="width: 100%;">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Name</th>
                  </tr>
              </thead>
               <?php     require "PHP/TableUsersPrinterCollection.php"; ?>
                  <tr>
                      <td>ID#</td>
                      <td>Email@gmail.com</td>
                      <td>Password123</td>
                      <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  <tr>
                    <td>ID#</td>
                    <td>Email@gmail.com</td>
                    <td>Password123</td>
                    <td>NameABC</td>
                  </tr>
                  
        </table>
      </div>
    </div>
  </section>



        <script src="//code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/admin_data_table.js"></script>

        
  </body>
</html> 

