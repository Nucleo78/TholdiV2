<?php

function gestionnaireConnexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=tholdi', 'root', 'root',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    return $pdo;
}

function inscription($mdp,$login,$codePays,$contact,$telephone,$adrMel,$ville,$cp,$adresse,$raisonSociale)
{
    $pdo = gestionnaireConnexion();

    $req = "select code from utilisateur order by code";
    $pdoStatement = $pdo->query($req);
    $users = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    
    //var_dump($users);
    $n = count($users);
    $place = -1;
    for ($i=0; $i < $n; $i++) { 
      if($i!=(($users[$i]["code"])-1))
      {
        $place = $i+1;
        $i = $n;
      }
    }

    if($place==-1)
    {
      $place = $n+1;
    }
    $req = "INSERT INTO utilisateur (mdp,login,codePays,contact,telephone,adrMel,ville,cp,adresse,raisonSociale,code) Values ('".$mdp."','".$login."','".$codePays."','".$contact."','".$telephone."','".$adrMel."','".$ville."','".$cp."','".$adresse."','".$raisonSociale."','".$place."')";
    $pdo->exec($req);
}

function connexion($login,$mdp)
{    
    $pdo = gestionnaireConnexion();
    $req = "select code,login,mdp,contact From utilisateur Where login like '".$login."'";
    $pdoStatement = $pdo->query($req);
    $users = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($users);
    $n = count($users);
    //echo $n;
    if ($n==1)
    {
        /*echo 'mdp=';
      echo $users[0]['mdp'];
      echo 'login=';
      echo $users[0]['login'];*/
      if ($users[0]['mdp'] == $mdp)
        {
          echo 'fonctionne2';
          //$_SESSION['contact'] = $users[3];
          $_SESSION['contact'] = $users[0]['contact'];
          $_SESSION['code'] = $users[0]['code'];
          //header('Location:index.php');
        }
    }
}


function reservation($dateDebut,$dateFin,$volumeEstime,$codeVilleDisposition,$codeVilleRendre,$codeUtilisateur)
{
    $pdo = gestionnaireConnexion();

    $req = "INSERT INTO reservation(dateDebutReservation,dateFinReservation,volumeEstime,codeVilleMiseDisposition,codeVilleRendre,codeUtilisateur) values ('".$dateDebut."','".$dateFin."','".$volumeEstime."','".$codeVilleDisposition."','".$codeVilleRendre."','".$codeUtilisateur."')";
    $pdo->exec($req);
    //return $pdo=>lasInsertId();
}

function reserver($codeReservation,$numTypeContainer,$qteReserver)
{
    $pdo = gestionnaireConnexion();

    $req = "INSERT INTO reserver(codeReservation,numTypeContainer,qteReserver) values ('".$codeReservation."','".$numTypeContainer."','".$qteReserver."')";
    $pdo->exec($req);
}

function obtenirVilles()
{
    $lesVilles = array();
    $pdo = gestionnaireConnexion();
    if ($pdo != NULL) {
        $req = "select * from ville ";
        $pdoStatement = $pdo->query($req);
        $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return($lesVilles);
}

function obtenirPays()
{
    $lesPays = array();
    $pdo = gestionnaireConnexion();
    if ($pdo != NULL)
    {
        $req = "select * from pays order by codePays";
        $pdoStatement = $pdo->query($req);
        $lesPays = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return ($lesPays);
}

function obtenirReservations()
{
    $lesReservations = array();
    $pdo = gestionnaireConnexion();
    if ($pdo != NULL)
    {
        $req = "select * from reservation where codeUtilisateur = ".$_SESSION['code']." order by codeReservation";
        $pdoStatement = $pdo->query($req);
        $lesReservations = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesReservations;
}
    
function obtenirContainer()
{
    $lesContainers = array();
    $pdo = gestionnaireConnexion();
    if ($pdo != NULL)
    {
        $req = "select * from typeContainer order by numTypeContainer";
        $pdoStatement = $pdo->query($req);
        $lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesContainers;
}


?>