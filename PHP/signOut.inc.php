<?php
session_start();
require_once'connect_db.php';

 
  if(isset($_SESSION['login'])){

             session_unset();
             session_destroy();
             header("location: /index.php");
              die;
      
 }else{  
     header("location: /signUp_inc.php");
 }
