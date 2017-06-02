<?php 
include 'connexion.php';
extract($_POST);
	$sql = "INSERT INTO personnage  SET Appelation = '$Appelation',MDP = '$password',Écaille = '$Ecaille',Race = '$Race', Classe = '$Classe', Capacité = '$Capacite', Invocation = '$Invocation', Origine = '$Origine', Physique = '$Physique', Capacités = '$Capacites', Mental = '$Mental', Social = '$Social'";
	mysqli_query($link,$sql);
	header('location: index.php');
?>