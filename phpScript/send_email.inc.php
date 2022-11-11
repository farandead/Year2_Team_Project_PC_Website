<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/Exception.php';
require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/PHPMailer.php';
require '/home2/babimors/comp-uk.motorsfeere.com/PHPMailer/src/SMTP.php';

function sendMail($emailFrom,$email_from_alias,$email_to, $object, $body){



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
$mail->SMTPAuth = true;  // Authentification SMTP active
$mail->Host = 'mail.motorsfeere.com';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 	465;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = 1;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';


if($mail->SMTPAuth){
   $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  $emailFrom;    //Adresse email à utiliser
   $mail->Password   =  '7Cx,iJ.;P.gO';         //Mot de passe de l'adresse email à utiliser
}

$mail->From       = trim($emailFrom);                //L'email à afficher pour l'envoi
$mail->FromName   = trim($email_from_alias);          //L'alias de l'email de l'emetteur

$mail->AddAddress(trim($email_to));

$mail->Subject    =  $object;                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->Body = $body; 	       //Texte brut
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
// echo 'Message bien envoyé';
     
}

}

//Thank you for providing. Please give me a moment.
//Thank you for being on hold, I appreciate your time and patience. Could you try these?
//Username :	info@motorsfeere.com
//Password :	Use the email account password.
//Incoming server:	mail.motorsfeere.com
//IMAP Port: 993 POP3 Port: 995
//Outgoing server:	mail.motorsfeere.com
//SMTP Port: 465
//, POP3 and SMTP require authentication.
