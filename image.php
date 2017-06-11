<?php
extract($_POST);

$verif = "SELECT * FROM personnage WHERE Appelation = '$Joueur'";
$verif2 = mysqli_query($link,$verif);
$data = mysqli_fetch_assoc($verif2);

$PageBlanche = imagecreatefrompng('img/Page.png');
$PageBlanche2 = imagecreatefrompng('img/Page2.png');
$Cadre = imagecreatefrompng('img/Cadre.png');
$Ecaille = imagecreatefrompng("img/Ecaille/".$data['Écaille'].".png");

//	----------------------------- Avatar -------------------------------------
if (file_exists("img/Avatar/$Joueur.jpg")) {
	$Avatar = imagecreatefromjpeg("img/Avatar/$Joueur.jpg");
} else{
	$Avatar = imagecolorallocate(imagecreate(250,250), 255,255,255);
}
imagecopyresampled(	$PageBlanche, 
				$Avatar, 
				25, 
				50, 
				0,0,
				250,
				250,
				250,
				250
);

//	----------------------------- Cadre -------------------------------------
imagecopyresampled(	$PageBlanche, 
					$Cadre, 
					25, 
					50, 
					0,0,
					250,
					250,
					250,
					250
);

//	----------------------------- Écaille -------------------------------------
imagecopyresampled(	$PageBlanche, 
					$Ecaille, 
					295, 
					75, 
					0,0,
					191,
					200,
					191,
					200
);

// Fond / Taille / Angle / X / Y / Couleur / Police / Message
$taille = 25;
//	----------------------------- Appelation -------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Appelation']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,410,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Appelation']);
//	-------------------------------- Race -----------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Race']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,450,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Race']);
//	-------------------------------- Classe -----------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Classe']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,490,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Classe']);

//	-------------------------------- Capacité -----------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Capacité']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,530,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Capacité']);
//	-------------------------------- Invocation -----------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Invocation']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,570,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Invocation']);
//	-------------------------------- Origine -----------------------------------------
$bbox = imagettfbbox($taille, 0, 'font/Gabriola.ttf', $data['Origine']);
$aide = 250-(($bbox[2]-$bbox[0])/2);
imagettftext($PageBlanche,$taille,0,$aide,610,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',$data['Origine']);

//	-------------------------------- Caractéristiques -----------------------------------------
imagettftext($PageBlanche,30,0,50,710,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',"Physique : ".$data['Physique']);
imagettftext($PageBlanche,30,0,50,760,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',"Mental : ".$data['Mental']);
$bbox = imagettfbbox(30, 0, 'font/Gabriola.ttf', "Social : ".$data['Social']);
$aide = 450-$bbox[2];
imagettftext($PageBlanche,30,0,$aide,710,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',"Social : ".$data['Social']);
$bbox = imagettfbbox(30, 0, 'font/Gabriola.ttf', "Capacités : ".$data['Capacités']);
$aide = 450-$bbox[2];
imagettftext($PageBlanche,30,0,$aide,760,imagecolorallocate($PageBlanche, 0, 0, 0),'font/Gabriola.ttf',"Capacités : ".$data['Capacités']);


//	-------------------------------- Compétences -----------------------------------------
imagettftext($PageBlanche2,30,0,50,50,imagecolorallocate($PageBlanche2, 0, 0, 0),'font/Gabriola.ttf',$data['Compétences']);
imagettftext($PageBlanche2,30,0,50,550,imagecolorallocate($PageBlanche2, 0, 0, 0),'font/Gabriola.ttf',$data['Inventaire']);

imagepng($PageBlanche, "img/Fiche/$Joueur.png");
imagepng($PageBlanche2, "img/Fiche/".$Joueur."2.png");

?>