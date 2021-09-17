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

reservation($dateDebut,$dateFin,$volumeEstime,$codeVilleDisposition,$codeVilleRendre,$codeUtililsateur);
var_dump($dateDebut, $dateFin)

//header ("location:index.php");

?>