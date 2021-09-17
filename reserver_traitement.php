<?php
include 'gestion_fonctions.php';
session_start();


reserver(1,2,3);
header ("location:Consultation.php");

?>