<?php
include 'gestion_fonctions.php';
session_start();
var_dump($_POST);
$dateDebut = strtotime($_POST["dateDebutReservation"]);
$dateFin = strtotime($_POST["dateFinReservation"]);
$volumeEstime = $_POST["volumeEstime"];
$codeVilleDisposition = $_POST["codeVilleDep"];
$codeVilleRendre = $_POST["codeVilleArriver"];
$codeUtililsateur = $_SESSION["code"];

$today = date("F j, Y, g:i a");
$dateReservation = strtotime($today);

if ($dateDebut >= $dateFin) { 
    
 }

reservation($dateDebut, $dateFin, $dateReservation, $volumeEstime, $codeVilleDisposition, $codeVilleRendre, $codeUtililsateur);

header ("location:reserver.php");

?>