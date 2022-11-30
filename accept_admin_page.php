<?php
require "PHP/CheckAdminAccess.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php'; ?>
</head>
            <header>
            <!--Admin Panel-->
        <div class="container-fluid">
            <div class="row">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-4" style="margin-top: -15px;">
        <a href="#" class="navbar-brand">Admin</a>
 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
 
         <div class="collapse navbar-collapse" id="navmenu">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a href="accept_admin_page.html" class="nav-link">Admin applications</a>
                 </li>
                 <li class="nav-item">
                     <a href="orders_management.php" class="nav-link">Order management</a>
                 </li>
                 <li class="nav-item">
                     <a href="accounts_base_page.php" class="nav-link">Accounts page</a>
                 </li>
                 
                 
             </ul>
 
         </div>
     </div>
    </nav>
</div>
</div>
</header>

<!--Accept Admin Table-->
<section class ="table">
    <div class="container1 d-flex justify-content-center align-items-center py-2">
      <div class="row"></div>
      <h1>'</h1>
    </div>
  </div>

    <div class="container1 mt-5 d-flex justify-content-center align-items-center mt-5 py-5">
      <div class="row"></div>
      <h1>Admin Authorisation</h1>
    </div>
  </div>

<div class="container2 me-4 ms-4">
  <div class="row">
        <table id="example" class="table table-striped" style="width: 100%;">
          <thead>
              <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Name</th>
                <th>Admin or Non-Admin</th>      
              </tr>
                 
          </thead>
 <?php 
                        require "PHP/TableAdminsPrinterCollection.php";
                        ?>    
        </table>
    </div>
  </div>
</section>



      <script src="//code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
      <script src="./js/admin_data_table.js"></script>

      
</body>
</html
