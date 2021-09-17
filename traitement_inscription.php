<?php include 'gestion_fonctions.php';
$login = $_POST["login"];
$mdp = $_POST["mdp"];
$contact = $_POST["contact"];
$raisonSociale = $_POST["raisonSociale"];
$adrMel = $_POST["adrMel"];
$telephone = $_POST["telephone"];
$codePays = $_POST["codePays"];
$ville = $_POST["ville"];
$cp = $_POST["cp"];
$adresse = $_POST["adresse"];
?>
<?php inscription($mdp,$login,$codePays,$contact,$telephone,$adrMel,$ville,$cp,$adresse,$raisonSociale);
header ("location:inscription.php");
?>