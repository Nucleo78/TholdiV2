<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
    function obtenirVilles()
{
    $lesVilles = array();
    $pdo = new PDO('mysql:host=localhost;dbname=tholdi', 'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    if ($pdo != NULL) {
        $req = "select * from ville order by codeVille";
        $pdoStatement = $pdo->query($req);
        $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return($lesVilles);
}
    ?>
    <?php $villes = obtenirVilles();
    $n = count($villes);
    //var_dump($villes);
    //echo $n;
    ?>
    <form action="reservation_traitement.php" methode="POST" class="form-reservation">
        <select name="codePays" id="codePays"><br>
            <?php for ($i = 0; $i < $n; $i++) {
                        $chaine = '<option value="'.$villes[$i]["codeVille"].'">'.$villes[$i]["nomVille"].'</option>';
                        echo $chaine;
                    }
            
            ?>   
    </form>
    
</body>
</html>

