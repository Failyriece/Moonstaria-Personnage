<?php
include	'connexion.php';
extract($_POST);

$verif = "SELECT Appelation FROM `personnage` WHERE Appelation = '".$_POST['Joueur']."'";
$verif2 = mysqli_query($link,$verif);
$data = mysqli_fetch_assoc($verif2);
if ($data['Appelation'] == '') {
	echo "<form action='verificationperso.php' method='post'>
				<label for='Joueur' class='block'>Ce personnage n'existe pas, voulez-vous réessayez?</label>
				<input type='text' name='Joueur' id='Joueur' placeholder='Joueur?'' class='block' required>
				<input type='submit' value='Afficher' class='block'>
			</form>";
}else{
	echo "<form action='verificationpassword.php' method='post'>
				<label for='Joueur' class='block'>Mot de Passe?</label>
				<input type='password' name='password' id='password' placeholder='Mot De passe?'' class='block' required>
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
	</head>
	<body>
		
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>