<?php include "debut.php" ?>
    <head>
		<link href="connexion.css" rel="stylesheet">
        <meta charset="utf-8"/>
        <title>Connexion Client THOLDI </title>
    </head>
    		<?php include 'menu.php';
             ?>

<center>	
<body>
	<img src=logo_tholdi.png>
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
<?php /*var_dump($_POST);echo '<br>';
var_dump($_SESSION);
$_SESSION['login'] = $_POST['login'];*/
?>
<!-- </table> -->
    </div>
<form action="inscription.php">
         <button type="submit">Inscrivez-Vous</button>
</form>
<?php /*    
$pdo = new PDO('mysql:host=localhost;dbname=tholdi', 'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$req = "select login,mdp,contact From utilisateur Where login like '".$_POST['login']."'";
$pdoStatement = $pdo->query($req);
$users = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($users);
$n = count($users);
//echo $n;
if ($n==1)
{
  //echo $users[0]['mdp'];
  if ($users[0]['mdp'] == $_POST['mdp'])
    {
      //echo 'fonctionne';
      //$_SESSION['contact'] = $users[3];
      $_SESSION['contact'] = $users[0]['contact'];
      //header('Location:index.php');
    }
}
var_dump($_SESSION);*/
?>
</body>
</html>