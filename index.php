<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Moonstaria</title>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
		<!-- Div de visionnage -->
		<div>	
			<form action="#" method="post">
				<label for="Groupe" class="block">A la recherche d'un groupe?</label>
				<input type="text" name="Groupe" id="Groupe" placeholder="Groupe?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
			<form action="#" method="post">
				<label for="JoueurAffichage" class="block">A la recherche d'un joueur?</label>
				<input type="text" name="JoueurAffichage" id="JoueurAffichage" placeholder="Joueur?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
		</div>
		<!-- Div de modification et de création de personnage -->
		<div>	
			<form action="verificationperso.php" method="post">
				<label for="Joueur" class="block">Modifier un joueur?</label>
				<input type="text" name="Joueur" id="Joueur" placeholder="Joueur?" class="block" required>
				<input type="submit" value="Afficher" class="block">
			</form>
			<a href="personnage.php">Créer</a>
		</div>

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>