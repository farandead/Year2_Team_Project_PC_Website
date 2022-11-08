<!-- SIGN UP -->

<?php 
$errors[] = "" ;
if (isset($_POST['signup_submit']) & !empty($_POST['signup_submit'])) {
    //if (empty($_POST['lastName'])) {
       // $errors[] = "";
    //}
    if (empty($_POST['firstName'])) {
        $errors[] = "Please Enter a Name";
    }
    if (empty($_POST['email'])) {
        $errors[] = "E-mail address is required";
    } else {
	    echo"I got you , you can continue";
        // Check Email is Unique with DB Query
	    
        //$sql = "SELECT * FROM account WHERE user_Email=?";
      //  $result = $dbh->prepare($sql);
       // $result->execute(array($_POST['email']));
       // $count = $result->rowCount();
       // if ($count == 1) {
       //     $errors[] = "The e-mail already exist. Please connect.";
        //}
    }

   // if (empty($_POST['phoneNumber'])) {
      //  $errors[] = "Veuiller rentrer votre numéro de téléphone";
   // }
    if (empty($_POST['pwd'])) {
        $errors[] = "Please insert a password.";
    } else {
      $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        // check the repeat password
       // if (empty($_POST['pwdRepeat'])) {
        //    $errors[] = "Confirmer votre mot de passe.";
        //} else {
            // compare both passwords, if they match. Generate the Password Hash
          //  if ($_POST['pwd'] == $_POST['pwdRepeat']) {
                // create password hash
         //       $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
          //  } else {
                // Display Error Message
             //   $errors[] = "Les mots de passes doievent être identiques";
            //}
	    var_dump($_POST['firstName']);
		var_dump($_POST['email']);
	    var_dump($pass_hash);
        }
    }

    if (empty($errors)) {
		
			
      //  $longueurKey = 15;
      //  $key = "";
       // for ($i = 1; $i < $longueurKey; $i++) {
       //     $key .= mt_rand(0, 9);
        //}

      //  $sql = "INSERT INTO account (user_last_name, user_email, user_pwd) VALUES ( :user_last_name, :user_email, :user_pwd)";
       // $result = $dbh->prepare($sql);
//$values = array(
           
           // ':user_last_name'     => $_POST['lastName'],
          //  ':user_email'        => $_POST['email'],
          //  ':user_pwd'     => $pass_hash,
           
       // );
      //  $res = $result->execute($values);
      //  if ($res) {
           
      //      $messages[] = "YOU ARE IN !";
     //       $messages[]= 'An confirmation e-mail have been send to this address' .$_POST['email']. '. ';
           /*
            if ($confirmationMail ){
                $messages[]= 'Un e-mail de confirmation à été envoyé à l&apos;addresse suivante : ' .$_POST['email']. '. ';
            } else{
                $errors[] = " EMAIL NOT SEND ";

            }
            */
       // } 
    }

     var_dump($errors);
    // echo "</br>";

    // var_dump($messages);

?>
<div class="form-container sign-in-container">
            <form action="#" style="background:white;" method="post">
                <h1>Sign in</h1>
                <input type="email" name="firstName" placeholder="Email" value=""  />
                <input type="password" name="email" placeholder="Password" value=""  />
                <a href="#" style="font-size: smaller;margin-top:10px">Forgot your password?</a>
                <a href="#" style="font-size: smaller;margin-top:10px;">Not a Customer? Sign in as admin Click <a href="" style="margin-bottom:10px">Here</a></a>
                <button type="submit" name="signup_submit" >Sign In</button>
            </form>
        </div>
