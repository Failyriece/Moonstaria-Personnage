<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'moonstariapersonnage');
if(mysqli_connect_errno())
{
	die("Erreur de connexion : ".mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');
?>