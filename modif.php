<?php 
include 'connexion.php';
extract($_POST);
if ($_POST['Fini'] == 'false') {
	$sql = "UPDATE personnage  SET Écaille = '$Ecaille',Race = '$Race', Classe = '$Classe', Capacité = '$Capacite', Invocation = '$Invocation', Origine = '$Origine', Physique = '$Physique', Capacités = '$Capacites', Mental = '$Mental', Social = '$Social', Compétences = '$Compétences', Inventaire = '$Inventaire' WHERE Appelation = '$Joueur'";
}else{
	$sql = "UPDATE personnage  SET Écaille = '$Ecaille', Compétences = '$Compétences', Inventaire = '$Inventaire' WHERE Appelation = '$Joueur'";
}
	mysqli_query($link,$sql);

if ($_FILES['imageperso']['name'] != '') {
	$image = $_FILES['imageperso']['tmp_name'];
	list($w_ori,$h_ori) = getimagesize($image);
	$image2 = imagecreatefromjpeg($image);
	$imagefinal = imagecreatetruecolor(400, 400);
	imagecopyresampled($imagefinal, $image2, 0, 0, 0, 0, 400, 400, $w_ori, $h_ori);
	imagejpeg($imagefinal, "img/Avatar/".$Joueur.".jpg");
}

	header('location: index.php');
?>