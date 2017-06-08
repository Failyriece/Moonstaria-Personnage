<?php 
include 'connexion.php';
extract($_POST);

$retour = 'index';

// Verifie que le perso n'existe pas déjà
$verif = 'SELECT Appelation FROM personnage';
$verif2 = mysqli_query($link,$verif);
while ($data = mysqli_fetch_assoc($verif2)) {
	if ($data['Appelation'] == $Appelation) {
		$retour = 'creation';
	}
}

if ($retour == 'creation') {
	echo "<form action='creation.php' method='post'>
				<input type='hidden' name='Joueur' value='$Appelation'>
				<input type='hidden' name='Rate' value='true'>
				<input type='submit' id='clickauto'>
			</form>
			<script>window.onload = function(){document.getElementById('clickauto').click();}</script>";
}else{
	$sql = "INSERT INTO personnage  SET Appelation = '$Appelation',MDP = '$password',Écaille = '$Ecaille',Race = '$Race', Classe = '$Classe', Capacité = '$Capacite', Invocation = '$Invocation', Origine = '$Origine', Physique = '$Physique', Capacités = '$Capacites', Mental = '$Mental', Social = '$Social'";
	mysqli_query($link,$sql);
	if ($_FILES['imageperso']['name'] != '') {
		$image = $_FILES['imageperso']['tmp_name'];
		list($w_ori,$h_ori) = getimagesize($image);
		$image2 = imagecreatefromjpeg($image);
		$imagefinal = imagecreatetruecolor(400, 400);
		imagecopyresampled($imagefinal, $image2, 0, 0, 0, 0, 400, 400, $w_ori, $h_ori);
		imagejpeg($imagefinal, "img/Avatar/".$Appelation.".jpg");
	}
	header('location: index.php');
}

?>