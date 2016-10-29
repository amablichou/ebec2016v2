<html>

 <head>

 <title>Inscriptions EBEC</title>

 </head>

<body>

<table border="1" cellpadding="0" cellspacing="0">

<tr>

<th>Nom de l'équipe</th>

<th>Email</th>

</tr>

<?php  
// déclaration paramètres connexion
$host = localhost;


$user = julia;

$bdd = inscrits_ebec;

$passwd  = ebec2016;

// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");

mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");

// Creation et envoi de la requete
$query = "SELECT equipe, email, nomprenom1, nomprenom2, nomprenom3, nomprenom4, telephone FROM equipes ORDER BY equipe";

$result = mysql_query($query);

// Recuperation des resultats
while($row = mysql_fetch_row($result)){
$equipe = $row[0];

$email = $row[1];

$nomprenom1 = $row[2];
$nomprenom2 = $row[3];
$nomprenom3 = $row[4];
$nomprenom4 = $row[5];

$telephone = $row[6];

}

// Deconnexion de la base de donnees
mysql_close();

?>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

$req = $bdd->prepare('INSERT INTO Equipes(equipe, email, nomprenom1, nomprenom2, nomprenom3, nomprenom4, telephone) VALUES(:equipe, :email, :nomprenom1, :nomprenom2, :nomprenom3, :nomprenom4, :telephone)');
$req->execute(array(
    'equipe' => $equipe,
    'email' => $email,
    'nomprenom1' => $nomprenom1,
    'nomprenom2' => $nomprenom2,
    'nomprenom3' => $nomprenom3,
    'nomprenom4' => $nomprenom4,
    'telephone' => $telephone,
    ));
</tr>

</table>

</body>

</html