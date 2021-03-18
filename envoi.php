<?php
error_reporting(E_ALL);

$EmailFrom = $_POST['email']; 
$EmailTo = "badrimeryem6@gmail.com";

$Nom = $_POST['nom']; 
$Email = $_POST['email'];
$Subject = "sujet";
$Message = $_POST['message']; 
 
// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
// mise en form mail
$Body = "";

$Body .= "Nom: ";
$Body .= $Nom;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Sujet: ";
$Body .= $Sujet;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
 
// envoi email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
	
// message success-error
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}

?>
