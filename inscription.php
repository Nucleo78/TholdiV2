<?php include 'debut.php' ?>
    <head>
		<link href="inscription.css" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>inscritpion Client THOLDI </title>
    </head>
        		<?php include 'menu.php';?>
                    
                <?php include 'gestion_fonctions.php';
                    $lesVilles = obtenirVilles(); 
                    $lesPays = obtenirPays(); ?>

<body>
<center>
        <center>   
        <img src=images/logo_tholdi.png>
        </center>
    <h1>
        Inscription client
    </h1>
    <!-- <table> -->
    <form action="traitement_inscription.php" method="post" class="form-inscription">
    <label for="login"> Identifiant </label><br>
    <input type="text" name="login" id="login" maxlength="20" required ><br>
    <label for="mdp"> Mot de passe </label><br> 
    <input type="password" name="mdp" id="mdp" maxlength="30" required ><br>
    <label for="Contact"> Contact </label><br>
    <input type="text" name="contact" id="contact" maxlength="20" ><br>
    <label for="raisonSociale"> Raison Sociale </label><br>
    <input type="text" name="raisonSociale" id="raisonSociale" ><br>
    <label for="adrMel"> Adresse Mail </label><br>
    <input type="email" name="adrMel" id="adrMel" maxlength="100"><br>
    <label for="telephone"> Téléphone </label><br>
    <input type="text" name="telephone" id="telephone" ><br>
    <label for="codePays"> Pays  </label><br>
    <select name="codePays" id="Pays">
        <?php
            $n = count($lesPays);
            for ($i = 0; $i < $n; $i++) {
                $chaine = '<option value="'.$lesPays[$i]["codePays"].'">'.$lesPays[$i]["nomPays"].'</option>';
                echo $chaine;
            }
                        ?>
    </select><br>
        
    <label for="ville"> Ville  </label><br>
    <select name="ville" id="ville">
        <?php
            $n = count($lesVilles);
            for ($i = 0; $i < $n; $i++) {
                $chaine = '<option value="'.$lesVilles[$i]["codeVille"].'">'.$lesVilles[$i]["nomVille"].'</option>';
                echo $chaine;
            }
                        ?>
    </select><br>
    <label for="cp"> Code postal </label><br>
    <input type="number" name="cp" id="cp" min="0" max="99999" pattern="[0-9]{5}" title="pas bon"><br>
    <label for="adresse"> Adresse </label><br>
    <input type="text" name="adresse" id="adresse" ><br>
    <input type="submit" Valider>
    </form>
    <form action="connexion.php">
            <button type="submit">Déjà Inscrit?</button>
        </form>
</center>
</body>
</html>