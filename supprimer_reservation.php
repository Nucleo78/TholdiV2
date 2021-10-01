WIP<br>
<?php
include 'gestion_fonctions.php';
//var_dump($_POST);
//echo $_POST['codeReservation'];

supprimerReservation($_POST['codeReservation']);
header ("location:consultation.php")

?>