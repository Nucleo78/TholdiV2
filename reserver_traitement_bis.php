<?php
include 'gestion_fonctions.php';
session_start();
//var_dump($_SESSION);
$codeUtilisateur = $_SESSION["code"];
$codeReservation = obtenirDernierCodeReservation($codeUtilisateur);
$var_dump($_POST);
//header ("location:reserver.php");

?>