    <?php
// Code for change password	
if(isset($_POST['submit']))
	{
$password= $_POST['password'] ;
$newpassword=password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
$user_email=$Mail;


$pwdHashed = $info["user_pwd"];

$checkPwd =  password_verify($password, $pwdHashed);
if ($checkPwd === false) {
        $error="Le mot de passe actuel n'est pas valide.";
    } else if ($checkPwd === true) {
        
        if($_POST['newpassword'] == $_POST['confirmpassword']){
            $con="UPDATE standardUser SET 	user_pwd=:newpassword WHERE user_email=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $user_email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$changeSucc = $chngpwd1->execute();
if ($changeSucc){
$msg="Votre mot de passe à été changer avec succés !";
} else {
        $error="Nous n'avons pas pû changer votre mot de passe. Veuillez contacter le service client.";
}
        } else {
         $error="Erreur de confirmation: Les mots de passe ne correspondent pas !";
         
        }
        
       
}
    

}
?>
