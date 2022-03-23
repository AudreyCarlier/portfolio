
<?php
/* Récupération des valeurs des champs du formulaire */
if ($_POST)
{
    $nom = stripslashes($_POST['name']); 
    $expediteur = stripslashes($_POST['email']); 
    $subject = stripslashes($_POST['subject']); 
    $message = stripslashes($_POST['message']); 


/* Destinataire (votre adresse e-mail) */
$to = 'chenuaudrey@gmail.com';
 
/* Construction du message */
$msg  = 'Bonjour,'."\r\n\r\n";
$msg .= 'Ce mail a été envoyé depuis monsite.com par '.$nom."\r\n\r\n";
$msg .= "Adresse e-mail de l'expéditeur ".$expediteur."\r\n\r\n";
$msg .= 'Voici le message qui vous est adressé :'."\r\n";
$msg .= '***************************'."\r\n";
$msg .= $message."\r\n";
$msg .= '***************************'."\r\n";
 
/* En-têtes de l'e-mail */
$headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";
 
/* Envoi de l'e-mail */
mail($to, $subject, $msg, $headers);
} 
?>