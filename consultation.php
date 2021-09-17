<?php include "debut.php" ?>
<link rel="stylesheet" href="consultation.css">
<link rel="icon" href="tholdi_logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>
		<title>TITRE DE L'ONGLET</title>
	</head>

	<body>
		
        <?php
            include 'menu.php';
            include 'gestion_fonctions.php';
            if (count($_SESSION)<1)
            {
                header("Location: redirect.php");
            }
             ?>
             <center>
            <img src="logo_tholdi.png" id="logoTholdi">
        </center>
        <div id="fond">
            <?php
                $lesReservations = obtenirReservations();
                //var_dump($lesReservations);
                $n = count($lesReservations);
                for ($i=0; $i < $n; $i++)
                {
                    echo ('<div class="consultation_reservation"> Code Reservation:' . $lesReservations[$i]['codeReservation'].'<br>');
                    echo ('Date du début de la reservation :' . gmdate("Y-m-d",$lesReservations[$i]['dateDebutReservation']).'<br>');
                    echo ('Date de fin de la reservation :' . gmdate("Y-m-d",$lesReservations[$i]['dateFinReservation']).'<br>');
                    echo ('Volume Estimé :' . $lesReservations[$i]['volumeEstime'].'<br>');
                    echo ('<form action="supprimer_reservation.php" method="post"> <input type="submit" value="Supprimer"> </form> </div>');
                }
            ?>
            

        </div>
	</body>
</html>