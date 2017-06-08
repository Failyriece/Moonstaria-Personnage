<?php
include 'connexion.php';
extract($_POST);
$Joueur = $_POST['Joueur'];
$verif = "SELECT * FROM `personnage` WHERE Appelation = '$Joueur'";
$verif2 = mysqli_query($link,$verif);
$data = mysqli_fetch_assoc($verif2);
$totauxCaract = $data['Physique'] + $data['Capacités'] + $data['Mental'] + $data['Social'];

echo "<form action='modif.php' method='post' accept-charset='utf-8' enctype='multipart/form-data'>";

if (!file_exists('img/Avatar/'.$Joueur.'.jpg')) {
	echo "<input type='hidden' name='VerifImg' value='false'>
	<input type='file' name='imageperso' value='' id='imageperso' onChange='getvalue();' accept='.jpg'/>
			<input type='button' value='Choisir une image' onclick='getfile()'' />
			<label for='PersoImage' id='PersoImage'>Aucun image choisie</label>";
}else{
	echo "<input type='hidden' name='VerifImg' value='true'>";
}
echo "<input type='hidden' name='Joueur' value='$Joueur'>
	<select name='Ecaille' id='Ecaille'>
		<option value='Noire'>Noire</option>
		<option value='Violette'>Violette</option>
		<option value='Bleue'>Bleue</option>
		<option value='Verte'>Verte</option>
		<option value='Jaune'>Jaune</option>
		<option value='Orange'>Orange</option>
		<option value='Rouge'>Rouge</option>
		<option value='Blanche'>Blanche</option>
	</select>
	<input type='text' name='Classe' id='Classe' placeholder='Classe' value='".$data['Classe']."'>";
if ($data['Race'] == '' || $data['Capacité'] == '' || $data['Invocation'] == '' || $data['Origine'] == '' || $totauxCaract != 45) {
	echo "<input type='hidden' name='Fini' value='false'>
	<input type='text' name='Race' id='Race' placeholder='Race' value='".$data['Race']."'>
	<input type='text' name='Capacite' id='Capacite' placeholder='Capacité' value='".$data['Capacité']."'>
	<input type='text' name='Invocation' id='Invocation' placeholder='Invocation' value='".$data['Invocation']."'>
	<input type='text' name='Origine' id='Origine' placeholder='Origine' value='".$data['Origine']."'>
	<input type='number' name='Physique' id='Physique' placeholder='Physique' value='".$data['Physique']."'>
	<input type='number' name='Capacites' id='Capacites' placeholder='Capacités' value='".$data['Capacités']."'>
	<input type='number' name='Mental' id='Mental' placeholder='Mental' value='".$data['Mental']."'>
	<input type='number' name='Social' id='Social' placeholder='Social' value='".$data['Social']."'>
	";
}else{echo "<input type='hidden' name='Fini' value='true'>";}
echo "<textarea name='Compétences' id='Compétences' cols='15' rows='5' placeholder='Compétences'>".$data['Compétences']."</textarea>
		<textarea name='Inventaire' id='Inventaire' cols='15' rows='5' placeholder='Inventaire'>".$data['Inventaire']."</textarea>
		<input type='submit' value='Enregistrer'>
	</form>";
echo "<form action='supprime.php' method='post'>
	<input type='hidden' name='Joueur' value='$Joueur'>
	<input type='submit' value='Supprimer le personnage'>
</form>"
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modification Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
		
	<script src="js/main.js"></script>
	</body>
</html>