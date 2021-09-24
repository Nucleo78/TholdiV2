<?php
include 'gestion_fonctions.php';
session_start();

$codeUtilisateur = $_SESSION["code"];
$codeReservationArray = obtenirDernierCodeReservation($codeUtilisateur);
//var_dump($codeReservationArray);
$codeReservation = $codeReservationArray[0]["codeReservation"];
$numTypeContainer = $_POST["numTypeContainer"];
$qteReserver = $_POST["qteReserver"];
//var_dump($codeReservation);
//var_dump($numTypeContainer);
//var_dump($qteReserver);
reserver($codeReservation,$numTypeContainer,$qteReserver);
if (isset($_POST["ajouterReservation"]))
{
    header("location:reserver.php");
}
else
{
    header("location:consultation.php");
}

?>