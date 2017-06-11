<?php

extract($_POST);

if ($Rate == 'true') {
	echo "<h1 style='color:red; text-align:center;'>Le nom $Joueur n'est pas disponible</h1>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Création Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/formulaire.css">
	</head>
	<body>
		<form action="ajouter.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" class='formulaire creation'>
			<input type="file" name="imageperso" value="" id="imageperso" onChange="getvalue();" accept=".jpg"/>
			<input type="button" value="Choisir une image" onclick="getfile()" />
			<label for="PersoImage" id="PersoImage">Aucun image choisie</label>
			<span class='block margetop'></span>
			<select id="Ecaille" name="Ecaille">
				<option value="Noire">Noire</option> 
				<option value="Violette">Violette</option> 
				<option value="Bleue">Bleue</option> 
				<option value="Verte">Verte</option> 
				<option value="Jaune">Jaune</option> 
				<option value="Orange">Orange</option> 
				<option value="Rouge">Rouge</option> 
				<option value="Blanche">Blanche</option> 
			</select>
			<input type="text" name="Appelation" id="Appelation" placeholder="Appelation" required>
			<input type="password" name="password" id="password" placeholder="Mot de Passe" required>
			<span class='block margetop'></span>
			<input type="text" name="Race" id="Race" placeholder="Race">
			<input type="text" name="Classe" id="Classe" placeholder="Classe">
			<input type="text" name="Capacite" id="Capacite" placeholder="Capacité">
			<input type="text" name="Invocation" id="Invocation" placeholder="Invocation">
			<input type="text" name="Origine" id="Origine" placeholder="Origine">
			<span class='block margetop	'></span>
			<input type="number" name="Physique" id="Physique" placeholder="Physique">
			<input type="number" name="Capacites" id="Capacites" placeholder="Capacités">
			<input type="number" name="Mental" id="Mental" placeholder="Mental">
			<input type="number" name="Social" id="Social" placeholder="Social">
			<input type="submit" value="Enregistrer" class="block">
		</form>
		<a href='index.php' class='Menu'>Menu</a>
		<script src="js/main.js"></script>
	</body>
</html>