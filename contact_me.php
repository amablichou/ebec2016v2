

<?php
//on check si les champs remplis ne sont pas vides
   empty($_POST['email']) 
   empty($_POST['nomprenom1'])
   empty($_POST['nomprenom2'])
   empty($_POST['nomprenom3'])		||
   empty($_POST['nomprenom4']) 		||
   empty($_POST['telephone'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

?>





<?php

//ENREGISTREMENT DES PARTICIPANTS DANS LA BASE DE DONNÉES


//On récupère les infos des participants
$equipe = strip_tags(htmlspecialchars($_POST['equipe']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$nomprenom1 = strip_tags(htmlspecialchars($_POST['nomprenom1']));
$nomprenom2 = strip_tags(htmlspecialchars($_POST['nomprenom2']));
$nomprenom3 = strip_tags(htmlspecialchars($_POST['nomprenom3']));
$nomprenom4 = strip_tags(htmlspecialchars($_POST['nomprenom4']));
$telephone = strip_tags(htmlspecialchars($_POST['telephone']));


//on essaie de se connecter au serveur (à modifier lors de la mmise en ligne)
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=ebec_2017;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


//On ajoute les participants dans la base de données
$req = $bdd->prepare('INSERT INTO equipes(equipe, email, nomprenom1, nomprenom2, nomprenom3, nomprenom4, telephone) VALUES(:equipe, :email, :nomprenom1, :nomprenom2, :nomprenom3, :nomprenom4, :telephone)');
$req->execute(array(
   'equipe' => $equipe,
   'email' => $email,
   'nomprenom1' => $nomprenom1,
   'nomprenom2' => $nomprenom2,
   'nomprenom3' => $nomprenom3,
   'nomprenom4' => $nomprenom4,
   'telephone' => $telephone
   ));

echo 'Bravo, votre équipe ' . $equipe .' a été ajoutée !';
?>

<!--
// Create the email and send the message
$to = 'amable.wernert@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>


-->
