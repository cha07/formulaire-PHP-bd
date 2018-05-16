<?php
include 'bdd.php';
?>

<?php

$reponse = $db->query('SELECT * FROM formulaire_php');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'].' '. $donnees['email'].' '.$donnees['genre'].' '. $donnees['speci'].' '. $donnees['interets'].' '. $donnees['message']. '<br />';
}

$reponse->closeCursor();
?>

