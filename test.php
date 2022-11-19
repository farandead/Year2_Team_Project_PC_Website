<?php
echo "TESTING TEST Kir";


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

        <!-- LOG IN SCRIPT -->
        <?php
        if (isset($_POST['submit_Login']) & !empty($_POST['submit_Login'])) {
            // PHP Form Validations
            if (empty($_POST['email'])) {
                // header("location: ".$_SERVER['PHP_SELF']."?error=emptyinput");   
                //  exit();
                $errors[] = "emptyinputemail";
            }
            if (empty($_POST['pwd'])) {
                // header("location: /pages/connexion.php?error=emptyinput");
                $errors[] = "emptyinputpwd";
            }
            if (empty($errors)) {
                // Check the Login Credentials
                $sql = "SELECT user_Email,User_Password FROM account WHERE user_Email=? ";
                $result = $conn->prepare($sql);
                $result->execute(array($_POST['email']));
                $count = $result->rowCount();
                $res = $result->fetch(PDO::FETCH_ASSOC);
                
                if ($count == 1) {
                    // Compare the password with password hash
                    // $hashed = '$2y$10$HqLUsOHun8xAxsui5wGCYe5';
                    if (password_verify('q', $res['User_Password'])) {
                        // regenerate session id
                        //session_start();
                        // $_SESSION['login'] = true;
                        //  $_SESSION['standardUserId'] = $res['standard_user_id'];
                        // $_SESSION['userEmail'] = $res['user_email'];
                        // $_SESSION['last_login'] = time();
                        // session_start();
        
                        // redirect the user to members area/dashboard page
                        // header("location: /index.php");
                        // exit;
                        echo "Valid";
                    } else {
                        //  header("location: ".$_SERVER["HTTP_REFERER"]."?error=wronglogin");
                        // exit();
                        $errors[] = "wronglogin";
                    }
                } else {

                    // header("location: /pages/connexion.php?error=unknowDetail");   
                    //exit();
                    $errors[] = "unknowDetail";
                }
            }
        }

        ?>
        <!-- END LOG IN PHP SCRIPT -->

        <div class="form-container sign-in-container">
            <form action="#" style="background:white ;" method="post">
                <h1>Sign in</h1>

                <input type="email" placeholder="Email" autocomplete="email" name="email" value="" />
                <input type="password" placeholder="Password" name="pwd" value=""/>
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a
                        href="" style="margin-bottom:10px">Here</a></a>

                <input class="ghost" type="submit" name="submit_Login" value="Sign In">
                <!-- message  -->
                    <?php
                    if (!empty($errors)) {
                        var_dump($errors);
                        //var_dump($_POST['email']);
                        var_dump(password_verify($_POST['pwd'], $res['User_Password']));
                        var_dump($res['User_Password']);
                        var_dump($_POST['pwd']);
                       
                    }


                    ?>
            </form>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with COMPUK</p>
                    <button class="ghost" id="signUp" onclick="signUp()">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

