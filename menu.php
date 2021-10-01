<?php
if(isset($_REQUEST['logout']))
{
    session_unset();
}
// la variable global $_SERVER['PHP_SELF'] retourne le lien de la page qui est consulté this.page
// suivi d'un ? qui permet d'appeler la requête "logout" (?logout) qui sera à la fin du lien et qui à pour 
// ordre donc de drop la session.

?>

<nav>
    <ul>
        <a href="index.php"><img src="images/tholdi_logo.png" alt="logo"></a>
        <li><a href="index.php" id="Accueil"><span class="nav">Accueil</span></a></li>
        <li><a href="consultation.php"><span class="nav">Consultation</span></a></li>
        <li><a href="reservation.php"><span class="nav">Réservation</span></a></li>
        <?php  if(isset($_SESSION['contact'])):    ?>
            <li><a href="<?php echo $_SERVER['PHP_SELF']?>?logout"><span class="nav">Déconnexion</span></a></li>
            <p><span id="test">Bienvenue <?php echo $_SESSION['contact']; ?></span></p>
        <?php else : ?>
        	
            <li><a href="connexion.php"><span class="nav">Connexion</span></a></li>

        <?php endif; ?>
    </ul>

</nav>

<link rel="stylesheet" href="style_menu.css">