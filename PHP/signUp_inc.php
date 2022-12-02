<?php
if (isset($_POST['signup_submit'])) {
        if (empty($_POST['firstName'])) {
            $errorsU[] = "Please Enter your firstName";
          
        }
        if (empty($_POST['lastname'])) {
            $errorsU[] = "Please Enter your lastname";
          
        }

        if (empty($_POST['user_number'])) {
            $errorsU[] = "Please Enter your number";
          
        }
        if (empty($_POST['user_sex'])) {
            $errorsU[] = "Please choose : M or F";
          
       }
        if (empty($_POST['user_birthday'])) {
            $errorsU[] = "Please select your date of birth";
         
       }
        if (empty($_POST['email'])) {
            $errorsU[] = "E-mail address is required";
          
        } else {

            // Check Email is Unique in DB 
    
            $sql = "SELECT * FROM account WHERE user_Email=?";
            $result = $conn->prepare($sql);
            $result->execute(array($_POST['email']));
            $count = $result->rowCount();
            if ($count == 1) {
                $errorsU[] = "The e-mail already exist. Please connect.";
              
            }
        }
        
        if (empty($_POST['user_pwd'])) {
            $errorsU[] = "Please insert a password.";
         
        } else {
            $pass_hash = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
           
        }
        if (empty($errorsU)) {
            $Users_status = 'Customer';
            $sql = "INSERT INTO account (User_FName, User_SName, user_Email, User_Password, User_Phone_Number, User_Sex, User_Status, User_DOB ) 
        VALUES ( :User_FName, :User_SName, :user_Email,   :User_Password ,:User_Phone_Number, :User_Sex, :User_Status, :User_DOB)";
            $result = $conn->prepare($sql);
            $values = array(
                ':User_FName'        => $_POST['firstName'],
                ':User_SName'        => $_POST['lastname'],
                ':user_Email'        => $_POST['email'],
                ':User_Password'     => $pass_hash,
                ':User_Phone_Number' => $_POST['user_number'],
                ':User_Sex'          => $_POST['user_sex'],
                ':User_Status'       => $Users_status,
                ':User_DOB'        => $_POST['user_birthday'],             
            );
          
            $res = $result->execute($values);
          
            if ($res) {
               $msgU[] = "Your account have been created. Please sign in.";
              
              
            } else {
              $errorsU[] = "Oh Oh , There is an unusual problem. Please try again Later.";
              
            }
        } else {
           // $errorsU[] = "Some input have not been wrote correctly. Please verify your answer";
           
        }
}
