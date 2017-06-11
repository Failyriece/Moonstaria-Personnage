<?php
include	'connexion.php';
extract($_POST);

$Joueur = $_POST['Joueur'];
$verif = "SELECT Appelation FROM `personnage` WHERE Appelation = '$Joueur'";
$verif2 = mysqli_query($link,$verif);
$data = mysqli_fetch_assoc($verif2);
if ($data['Appelation'] == '') {
	echo "<form action='verificationperso.php' method='post'>
				<label for='Joueur' class='block'>Ce personnage n'existe pas, voulez-vous réessayez?</label>
				<input type='text' name='Joueur' id='Joueur' placeholder='Joueur?'' class='block' required autofocus>
				<input type='submit' value='Afficher' class='block'>
			</form>";
}else{
	echo "<form action='verificationpassword.php' method='post'>
				<label for='Joueur' class='block'>Mot de Passe?</label>
				<input type='password' name='password' id='password' placeholder='Mot De passe?'' class='block' required autofocus>
				<input type='hidden' name='Joueur' value='$Joueur'>
				<input type='submit' value='Se connecter' class='block'>
			</form>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personnage Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/verif.css">
	</head>
	<body>
		<a href="index.php" class="Menu">Menu</a>
		<script src="js/main.js"></script>
	</body>
</html>