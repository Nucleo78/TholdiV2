<?php
include 'gestion_fonctions.php';

$codeReservation = 58;
$lesReservations = array();
$pdo = gestionnaireConnexion();

$req = "SELECT dateDebutReservation, dateFinReservation from reservation where codeReservation = ".$codeReservation."";
$pdoStatement = $pdo->query($req);
$lesDates = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
$nbJours = ($lesDates[0]['dateFinReservation'] - $lesDates[0]['dateDebutReservation']) / 86400;

$nbJours = 365;

$nbAnnes = $nbJours / 365;
$nbAnnes = floor($nbAnnes);


if($nbAnnes > 0)
{
    $i = 0;
    while ($i<$nbAnnes)
    {
        $nbJours = $nbJours - 365;
        $i = $i+1;
    }    
}
$nbTrimestre = $nbJours / 90;
$nbTrimestre = floor($nbTrimestre);

if($nbTrimestre > 0)
{
    $i = 0;
    while ($i<$nbTrimestre)
    {
        $nbJours = $nbJours - 90;
        $i = $i + 1;
    }
}

$req = "SELECT numTypeContainer,qteReserver FROM reserver WHERE codeReservation = ".$codeReservation."";
$pdoStatement = $pdo->query($req);
$lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
var_dump($lesContainers);

$nbContainers = count($lesContainers);

$req = "SELECT * FROM tarificationContainer";
$pdoStatement = $pdo->query($req);
$tarificationContainer = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

var_dump($lesContainers);
$nbTarif = count($tarificationContainer);
$coutTotal = 0;

for ($i=0; $i<$nbContainers; $i=$i+1)
{
    $numTypeContainer = $lesContainers[$i]['numTypeContainer'];
    $qteReserver = $lesContainers[$i]['qteReserver'];
    for ($j=0; $j<$nbTarif ; $j=$j+1)
    {
        if ($numTypeContainer == $tarificationContainer[$j]['numTypeContainer'])
        {
            $tarif = intval($tarificationContainer[$j]['tarif']);            
            
            if ($tarificationContainer[$j]['codeDuree']=='ANNEE')
            {
                $coutTotal = $coutTotal + (($nbAnnes*$tarif)*$qteReserver);
            }
            else if ($tarificationContainer[$j]['codeDuree']=='TRIMESTRE')
            {
                $coutTotal = $coutTotal + (($nbTrimestre*$tarif)*$qteReserver);
            }
            else if ($tarificationContainer[$j]['codeDuree']=='JOUR')
            {
                $coutTotal = $coutTotal + (($nbJours*$tarif)*$qteReserver);
            }
        }
    }
}
echo ($coutTotal);

?>