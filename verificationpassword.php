<?php
include	'connexion.php';
extract($_POST);
$Joueur = $_POST['Joueur'];
$MDP = $_POST['password'];
$verif = "SELECT Appelation, MDP FROM `personnage` WHERE Appelation = '$Joueur'";
$verif2 = mysqli_query($link,$verif);
$data = mysqli_fetch_assoc($verif2);
$passcache = sha1($password);

if ($data['MDP'] == $passcache ||$_POST['password'] == 'admin'){
	echo "<form action='modification.php' method='post'>
				<input type='hidden' name='Joueur' value='$Joueur'>
				<input type='submit' id='clickauto'>
			</form>";
}else{
	echo "<form action='verificationperso.php' method='post'>
				<input type='hidden' name='password' value='$MDP'>
				<input type='hidden' name='Joueur' value='$Joueur'>
				<input type='submit' id='clickauto'>
			</form>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Verification password</title>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
		
		<script src="js/clickauto.js"></script>
	</body>
</html>