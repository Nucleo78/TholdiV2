<?php include "debut.php" ?>
<link rel="stylesheet" href="reserver.css">
<link rel="icon" href="tholdi_logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head> 
	<title> Reserver </title>
</head>

<body> 
	<?php
		include "gestion_fonctions.php";
		$containers = obtenirContainer();
		$n = count($containers);
		//var_dump($containers)
		?>
	<form action="reserver_traitement.php" method="post" class="form_reserver">

		<label for="numTypeContainer"> Type de conteneur </label>
		<select name="numTypeContainer" id="numTypeContainer" required>
			<option value="" disabled selected hidden> Choisissez un conteneur </option>
			<?php
				for ($i=0; $i<$n; $i++)
				{						
					$chaine = '<option value="'.$containers[$i]["numTypeContainer"].'">'.$containers[$i]["libelleTypeContainer"].'</option>';
					echo ($chaine);
				}
			?>			
		</select><br>

		<label for="qteReserver"> Quantité reservé </label>
		<input type="number" name="qteReserver" id="qteReserver" min="1" placeholder="Quantité" required> <br>

		<input type="submit" name="confirmerReservation" value="Confirmer la réservation">
		<input type="submit" name="ajouterReservation" value="Ajouter une ligne de réservation">
	</form>
</body>
</html>