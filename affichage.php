
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Livre Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/affichage.css">
	</head>
	<body>
	
		<?php
include 'connexion.php';
extract($_POST);

if ($Affiche == 'Joueur') {
	$verif = "SELECT * FROM personnage WHERE Appelation = '$Joueur'";
	$verif2 = mysqli_query($link,$verif);
	$data = mysqli_fetch_assoc($verif2);
	if ($data['Appelation'] == '') {
		echo "<p class='Nope'>Ce personnage n'existe pas</p><a href='index.php' class='Menu'>Menu</a>";
	}else{
		echo "<div id='flipbook' class='regroupe'>
			<div><img src='img/Face.jpg'></div>
			<div><img src='img/Fiche/$Joueur.png'></div>
			<div><img src='img/Fiche/".$Joueur."2.png'></div>
			<div><img src='img/Face2.jpg'></div>
		</div>
		<a href='index.php' class='Menu2'>Menu</a>";
	}
}else if ($Affiche == 'Groupe') {
	$verif = "SELECT * FROM personnage WHERE Groupe = '$Groupe'";
	$verif2 = mysqli_query($link,$verif);
	$data = mysqli_fetch_assoc($verif2);
	if ($data['Groupe'] == '') {
		echo "<p class='Nope'>Ce groupe n'existe pas</p><a href='index.php' class='Menu'>Menu</a>";
	}else{
		echo "<div id='flipbook' class='regroupe'>
		<div><img src='img/Face.jpg'></div>
		<div><img src='img/Fiche/".$data['Appelation'].".png'></div>
		<div><img src='img/Fiche/".$data['Appelation']."2.png'></div>";
		while ($data = mysqli_fetch_assoc($verif2)) {
			echo "<div><img src='img/Fiche/".$data['Appelation'].".png'></div>
				<div><img src='img/Fiche/".$data['Appelation']."2.png'></div>";
		}
		echo "<div><img src='img/Face.jpg'></div></div>
		<a href='index.php' class='Menu2'>Menu</a>";	
	}
}


?>
		<script src="js/jquery.js"></script>
		<script src="js/turn.min.js"></script>
		<script type="text/javascript">
			$("#flipbook").turn({
				width: 1000,
				height: 808,
				autoCenter: false
			});
		</script>
	</body>
</html>