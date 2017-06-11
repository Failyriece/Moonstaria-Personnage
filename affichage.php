<?php
include 'connexion.php';
extract($_POST);

if ($Affiche == 'Joueur') {
	$verif = "SELECT * FROM personnage WHERE Appelation = '$Joueur'";
	$verif2 = mysqli_query($link,$verif);
	$data = mysqli_fetch_assoc($verif2);
	if ($data['Appelation'] == '') {
		echo "<p>Ce personnage n'existe pas</p>";
	}else{
		echo "<img src='img/Fiche/$Joueur.png' alt=''><img src='img/Fiche/".$Joueur."2.png' alt=''>";
	}
}else if ($Affiche == 'Groupe') {
	$verif = "SELECT * FROM personnage WHERE Groupe = '$Groupe'";
	$verif2 = mysqli_query($link,$verif);
	$data = mysqli_fetch_assoc($verif2);
	if ($data['Groupe'] == '') {
		echo "<p>Ce groupe n'existe pas</p>";
	}else{
		echo "<img src='img/Fiche/".$data['Appelation'].".png' alt=''><img src='img/Fiche/".$data['Appelation']."2.png' alt=''><br>";
		while ($data = mysqli_fetch_assoc($verif2)) {
			echo "<img src='img/Fiche/".$data['Appelation'].".png' alt=''><img src='img/Fiche/".$data['Appelation']."2.png' alt=''><br>";
		}		
	}
}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Livre Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/affichage.css">
	</head>
	<body>
	
		
<!-- 
		<div id="flipbook">
			<?php 
				// echo "<div>".$_POST['Joueur']."</div>
				// <div><img src='img/Page.png'></div>";
			 ?>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
			<div><img src='img/Page.png'></div>
		</div> -->
		
		



		<!-- <script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/turn.min.js"></script>
		<script type="text/javascript">
			$("#flipbook").turn({
				width: 1000,
				height: 808,
				autoCenter: true
			});
		</script> -->
	</body>
</html>