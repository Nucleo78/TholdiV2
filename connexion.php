<?php include "debut.php" ?>
    <head>
		<link href="connexion.css" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>Connexion Client THOLDI </title>
    </head>
    		<?php include 'menu.php';
             ?>

<center></center>
<body>
	<img src=images/logo_tholdi.png>
<h1>
	Connexion client
</h1>
    <div id="encadre">
<!-- <table> -->
  <form method="post" action="traitementConnexion.php">
<ul id="connect_ul">
<!-- <tr> -->
	<li class="connect_li">Identifiant <input type="text" name="login" required size="10"></li>
	<li class="connect_li">Mot de Passe <input type="password" name="mdp" required size="10"></li>
    <input type="submit" value="Valider">
<!-- </tr> -->

</ul>
</form>
<!-- </table> -->
    </div>
<form action="inscription.php">
  <button type="submit">Inscrivez-Vous</button>
</form>

</body>
</html>