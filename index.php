<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<!-- Div de visionnage -->
		<div>	
			<form action="affichage.php" method="post" class='RechercheGroupe'>
				<input type="hidden" name="Affiche" value='Groupe'>
				<label for="Groupe" class="block">A la recherche d'un groupe?</label>
				<input type="text" name="Groupe" id="Groupe" placeholder="Groupe?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
			<form action="affichage.php" method="post" class='RechercheJoueur'>
				<input type="hidden" name="Affiche" value='Joueur'>
				<label for="JoueurAffichage" class="block">A la recherche d'un joueur?</label>
				<input type="text" name="Joueur" id="Joueur" placeholder="Joueur?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
		</div>
		<!-- Div de modification et de création de personnage -->
		<div class="droite">	
			<form action="verificationperso.php" method="post" class='Modification'>
				<label for="Joueur" class="block">Modifier un joueur?</label>
				<input type="text" name="Joueur" id="Joueur" placeholder="Joueur?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
			<form action="creation.php" method="post" class='Creation'>
				<input type="hidden" name="Rate" value=''>
				<input type="submit" value="Créer un personnage" class="block">
			</form>
		</div>

		<script src="js/main.js"></script>
	</body>
</html>