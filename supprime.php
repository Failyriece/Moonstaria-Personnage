<?php 
include 'connexion.php';
extract($_POST);
$sql = "DELETE FROM personnage WHERE Appelation = '$Joueur'";
mysqli_query($link,$sql);
if (file_exists('img/Avatar/'.$Joueur.'.jpg')) {
	unlink('img/Avatar/'.$Joueur.'.jpg');
}
header('location: index.php');
?>