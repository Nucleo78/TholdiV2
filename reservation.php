<?php include "debut.php" ?>
<link rel="stylesheet" href="reservation.css">
<link rel="icon" href="tholdi_logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>TITRE DE L'ONGLET</title>
    </head>

    <?php include 'menu.php'; ?>
    <?php include 'gestion_fonctions.php';
        /*if(!isset($_SESSION['contact']))
        {
            header("location:redirect.php");
        }*/
        $villes = obtenirVilles();
        $containers = obtenirContainer();
        $n = count($villes);
    ?>

    <body>
        <center>
            <img src="logo_tholdi.png" id="logoTholdi">
        </center>

        <form action="reservation_traitement.php" method="post" class="form-reservation">
            <div class="form-reservation">
                <label for="dateDebutReservation"> Date de début de reservation </label>
                <input type="date" name="dateDebutReservation" required>
            </div>
            <div class="form-reservation">
                <label for="dateFinReservation"> Date de fin de reservation </label>
                <input type="date" name="dateFinReservation" required>
            </div>
            <div class="form-reservation">
                <label for="volumeEstime"> Volume Estimé </label>
                <input type="number" name="volumeEstime" min="1" max="30000" placeholder="0" required>
            </div>
            <div class="form-reservation">
                <label for="codeVilleDep"> Ville de départ </label>
                <select name="codeVilleDep" id="codeVilleDep">
                    <?php for ($i = 0; $i < $n; $i++) {
                            $chaine = '<option value="'.$villes[$i]["codeVille"].'">'.$villes[$i]["nomVille"].'</option>';
                            echo $chaine;
                        }
                    ?>
                </select>
                    <br>
            </div>
            <div class="form-reservation">
                <label for="codeVilleArriver"> Ville d'arriver </label>
                <select name="codeVilleArriver" id="codeVilleArriver">
                    <?php
                    for ($i = 0; $i < $n; $i++) {
                        $chaine = '<option value="'.$villes[$i]["codeVille"].'">'.$villes[$i]["nomVille"].'</option>';
                        echo $chaine;
                    }
                    ?>
                </select>
            </div>
            <div class="form-reservation input">
                <input type="submit" value="valider">
            </div>
    </form>

	</body>
</html>