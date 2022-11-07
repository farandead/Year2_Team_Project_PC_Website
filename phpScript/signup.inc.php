<!-- SIGN UP -->
                                                        <?php 
                                                        if (isset($_POST['signup_submit']) & !empty($_POST['signup_submit'])) {
                                                            if (empty($_POST['lastName'])) {
                                                                $errors[] = "Veuiller rentrer votre prénom  ";
                                                            }
                                                            if (empty($_POST['firstName'])) {
                                                                $errors[] = "Veuiller rentrer votre nom de famille";
                                                            }
                                                            if (empty($_POST['email'])) {
                                                                $errors[] = "Votre addresse e-mail est requise";
                                                            } else {
                                                                // Check Email is Unique with DB Query
                                                                $sql = "SELECT * FROM standardUser WHERE user_email=?";
                                                                $result = $dbh->prepare($sql);
                                                                $result->execute(array($_POST['email']));
                                                                $count = $result->rowCount();
                                                                if ($count == 1) {
                                                                    $errors[] = "L'addresse e-mail est déjà utiliser. Veullez vous connecter !";
                                                                }
                                                            }

                                                            if (empty($_POST['phoneNumber'])) {
                                                                $errors[] = "Veuiller rentrer votre numéro de téléphone";
                                                            }
                                                            if (empty($_POST['pwd'])) {
                                                                $errors[] = "Veullez rentrer un mot de passe.";
                                                            } else {
                                                                // check the repeat password
                                                                if (empty($_POST['pwdRepeat'])) {
                                                                    $errors[] = "Confirmer votre mot de passe.";
                                                                } else {
                                                                    // compare both passwords, if they match. Generate the Password Hash
                                                                    if ($_POST['pwd'] == $_POST['pwdRepeat']) {
                                                                        // create password hash
                                                                        $pass_hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                                                                    } else {
                                                                        // Display Error Message
                                                                        $errors[] = "Les mots de passes doievent être identiques";
                                                                    }
                                                                }
                                                            }


                                                            // CSRF Token Validation
                                                            if (isset($_POST['csrf_token'])) {
                                                                if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
                                                                } else {
                                                                    $errors[] = "Problem with CSRF Token Validation";
                                                                }
                                                            }

                                                            // CSRF Token Time Validation
                                                            $max_time = 60 * 60 * 24; // in seconds
                                                            if (isset($_SESSION['csrf_token_time'])) {
                                                                $token_time = $_SESSION['csrf_token_time'];
                                                                if (($token_time + $max_time) >= time()) {
                                                                } else {
                                                                    $errors[] = "CSRF Token Expired";
                                                                    unset($_SESSION['csrf_token']);
                                                                    unset($_SESSION['csrf_token_time']);
                                                                }
                                                            }

                                                            if (empty($errors)) {

                                                                $longueurKey = 15;
                                                                $key = "";
                                                                for ($i = 1; $i < $longueurKey; $i++) {
                                                                    $key .= mt_rand(0, 9);
                                                                }

                                                                $sql = "INSERT INTO standardUser (user_first_name, user_last_name, user_email, user_pwd, user_phone, confirmKey) VALUES (:user_first_name, :user_last_name, :user_email, :user_pwd, :user_phone, :confirmKey)";
                                                                $result = $dbh->prepare($sql);
                                                                $values = array(
                                                                    ':user_first_name'     => $_POST['firstName'],
                                                                    ':user_last_name'     => $_POST['lastName'],
                                                                    ':user_email'        => $_POST['email'],
                                                                    ':user_pwd'     => $pass_hash,
                                                                    ':user_phone'       => $_POST['phoneNumber'],
                                                                    ':confirmKey'       => $key,
                                                                );
                                                                $res = $result->execute($values);
                                                                if ($res) {
                                                                    $message = '
                                                                    <html> 
                                                                        <body>
                                                                            <div>
                                                                                <p>Salut ' . $_POST['firstName'] . ',</p>
                                                                                </br>
                                                                                <p>Vous venez de créer un compte sur MotorsFeere. Avant de pouvoir utiliser votre compte, vous devez vérifier votre adresse e-mail en cliquant ici : </br>
                                                                                 <a href="https://motorsfeere.com/phpScript/inc/confirmation.inc.php?email=' . $_POST['email'] . '&key=' . $key . '"> Confirmer Votre Compte </a> </p>
                                                                                 </br>
                                                                                <p>L&apos;équipe MotorsFeere.</p>
                                                                            </div>
                                                                        </body>
                                                                    </html>
                                                                    ';
                                                                    
                                                                   $test = "ibrahim.gbanet@gmail.com" ;
                                                                    $testing = "the-team@motorsfeere.com" ;

                                                                $confirmationMail =    sendMail($testing, "No-reply-motorsfeere", $_POST['email'] , "Confirmation de votre compte motorsfeere", $message);

                                                                    // header("Location:" . $_SERVER["HTTP_REFERER"] . "?error=none");
                                                                    // exit();

                                                                    $messages[] = "Vous êtes inscrit(e) !";
                                                                    $messages[]= 'Un e-mail de confirmation à été envoyé à l&apos;addresse suivante : ' .$_POST['email']. '. ';
                                                                   /*
                                                                    if ($confirmationMail ){
                                                                        $messages[]= 'Un e-mail de confirmation à été envoyé à l&apos;addresse suivante : ' .$_POST['email']. '. ';
                                                                    } else{
                                                                        $errors[] = " EMAIL NOT SEND ";
                                                                       
                                                                    }
                                                                    */
                                                                } 
                                                            }

                                                            // var_dump($errors);
                                                            // echo "</br>";

                                                            // var_dump($messages);
                                                        } 
                                                        ?>
