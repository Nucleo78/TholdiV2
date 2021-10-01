<?php
session_start();
include 'gestion_fonctions.php';
$login = $_POST["login"];
$mdp = $_POST["mdp"];
connexion($login,$mdp);
header("location:index.php");
