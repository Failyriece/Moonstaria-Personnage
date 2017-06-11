<?php 
include 'connexion.php';
extract($_POST);
if ($_POST['Fini'] == 'false') {
	$sql = "UPDATE personnage  SET Écaille = '$Ecaille', Groupe = '$Groupe', Race = '$Race', Classe = '$Classe', Capacité = '$Capacite', Invocation = '$Invocation', Origine = '$Origine', Physique = '$Physique', Capacités = '$Capacites', Mental = '$Mental', Social = '$Social', Compétences = '$Compétences', Inventaire = '$Inventaire' WHERE Appelation = '$Joueur'";
}else{
	$sql = "UPDATE personnage  SET Écaille = '$Ecaille', Groupe = '$Groupe', Classe = '$Classe', Compétences = '$Compétences', Inventaire = '$Inventaire' WHERE Appelation = '$Joueur'";
}
mysqli_query($link,$sql);
if ($_FILES['imageperso']['name'] != '' && $VerifImg == 'false') {
	$image = $_FILES['imageperso']['tmp_name'];
	list($w_ori,$h_ori) = getimagesize($image);
	$image2 = imagecreatefromjpeg($image);
	$imagefinal = imagecreatetruecolor(250, 250);
	imagecopyresampled($imagefinal, $image2, 0, 0, 0, 0, 250, 250, $w_ori, $h_ori);
	imagejpeg($imagefinal, "img/Avatar/".$Joueur.".jpg");
}
include 'image.php';
header('location: index.php');
?>