<?php 
include 'connexion.php';
extract($_POST);
	$sql = "DELETE FROM personnage WHERE Appelation = '$Joueur'";
	mysqli_query($link,$sql);
	header('location: index.php');
?>