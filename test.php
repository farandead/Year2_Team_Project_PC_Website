<?php



$servername = "localhost";
$username = 'babimors_astonTeam';
$password ='HW#1o.5=#cl+';

try {
  $conn = new PDO("mysql:host=$servername;dbname=babimors_compuk", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
 <!-- SIGN UP PHP SCRIPT-->
    <?php

    if (isset($_POST['signup_submit']) & !empty($_POST['signup_submit'])) {

        //if (empty($_POST['lastName'])) {
        // $errors[] = "";
        //}
        if (empty($_POST['firstName'])) {
            $errors[] = "Please Enter your firstName";
        }
        if (empty($_POST['lastname'])) {
            $errors[] = "Please Enter your lastname";
        }

        if (empty($_POST['user_number'])) {
            $errors[] = "Please Enter your number";
        }
       // if (empty($_POST['user_sex'])) {
       //     $errors[] = "Please choose : M or F";
       // }



        if (empty($_POST['email'])) {
            $errors[] = "E-mail address is required";
        } else {

            // Check Email is Unique in DB 
    
            $sql = "SELECT * FROM account WHERE user_Email=?";
            $result = $conn->prepare($sql);
            $result->execute(array($_POST['email']));
            $count = $result->rowCount();
            if ($count == 1) {
                $errors[] = "The e-mail already exist. Please connect.";
            }
        }

        // if (empty($_POST['phoneNumber'])) {
        //  $errors[] = "Veuiller rentrer votre numéro de téléphone";
        // }
        if (empty($_POST['user_pwd'])) {
            $errors[] = "Please insert a password.";
        } else {
            $pass_hash = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
            // check the repeat password
            // if (empty($_POST['pwdRepeat'])) {
            //  $errors[] = "Confirmer votre mot de passe.";
            // } else {
            // compare both passwords, if they match. Generate the Password Hash
            //  if ($_POST['pwd'] == $_POST['pwdRepeat']) {
            // create password hash
            //       $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            //  } else {
            // Display Error Message
            //   $errors[] = "Les mots de passes doievent être identiques";
            //}
            //var_dump($_POST['firstName']);
            //var_dump($_POST['email']);
            //var_dump($pass_hash);
            // }
        }

        if (empty($errors)) {
            //   echo " inserting ";
    
            //  $longueurKey = 15;
            //  $key = "";
            // for ($i = 1; $i < $longueurKey; $i++) {
            //     $key .= mt_rand(0, 9);
            //}
    
            $sql = "INSERT INTO account (User_FName, User_SName, user_Email, User_Password, User_Phone_Number , User_Sex) 
        VALUES ( :User_FName, :User_SName, :user_Email,   :User_Password ,:User_Phone_Number)";
            $result = $conn->prepare($sql);
            $values = array(
                ':User_FName' => $_POST['firstName'],
                ':User_SName' => $_POST['lastname'],
                ':user_Email' => $_POST['email'],
                ':User_Password' => $pass_hash,
                ':User_Phone_Number' => $_POST['user_number'],
                


            );
            $res = $result->execute($values);
            if ($res) {
                //echo "YOU ARE IN !";
                echo "<script>alert('YOU ARE IN !');</script>";
                //      $messages[] = "YOU ARE IN !";
                //       $messages[]= 'An confirmation e-mail have been send to this address' .$_POST['email']. '. ';
                /*
                if ($confirmationMail ){
                $messages[]= 'Un e-mail de confirmation à été envoyé à l&apos;addresse suivante : ' .$_POST['email']. '. ';
                } else{
                $errors[] = " EMAIL NOT SEND ";
                }
                */
            } else {
                $errors[] = "not in ";
            }
        } else {

            $errors[] = "not inserting";
            // var_dump($errors);
        }

        //var_dump($errors);
        // echo "</br>";
    
        // var_dump($messages);
    }
    ?>
    <!-- END --- SIGN UP PHP SCRIPT-->

    <div class="container" id="container123">
        <div class="form-container sign-up-container">
            <form action="#" class="form-id">

                <h1>Create Account</h1>

                <input type="firstname" placeholder="First Name" name="firstName" value=""/>
                <input type="lastname" placeholder="Last Name" name="lastname" value=""/>
                <input type="email" placeholder="Email" name="email" value=""/>
                <input type="password" placeholder="Password" name="Password" value=""/>
                <input type="number" placeholder="Contact No" name="user_number" value=""/>
                 
               <!-- <input type="text" placeholder="Street" name="user_street" value="" />
                <div class="small-container">
                    <input type="text" class="small-input" placeholder="County" name="user_county" value="" />
                    <input type="text" class="small-input" placeholder="Country" name="user_country" value="" />
                </div>
                <div class="small-conatainer-2">
                    <input type="text" class="small-input" placeholder="City" name="user_city" value="" />
                    <input type="text" class="small-input" placeholder="Post Code" name="user_postCode" value="" />
                </div> -->
                <button style="margin-top:15px ;" type="submit" name="signup_submit">Sign Up</button>
                <!--<input  style="margin-top:15px"   value="Sign Up">-->
            </form>
            <?php
            if (!empty($errors)) {
                var_dump($errors);
            }
            ?>
        </div>
        <!--END  CREATE AN ACCOUNT  -->

        
