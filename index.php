<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            if(isset($_GET['pass'])){
                $pass = $_GET['pass'];
            }
            else{
                $pass = "";
            }
        }
        else{
            $name = "";
            $pass = "";
        }
        
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('bibiliotheque');
        $req = "select Username , password from users where Username = '$name' and password = '$pass'";
        $resultat = mysql_query($req);
        $c = mysql_num_rows($resultat);
        if( $c == 1 ){
            echo('<a href="rech.php">Rechercher livre</a><br>');
            echo('<a href="add.php">Ajouter livre</a><br>');
            echo('<a href="sup.php">Supprimer livre</a><br>');
            echo('<a href="mod.php">Modifier livre</a>');
        }
        else
        {
    ?>
    <form action="index.php" method="get">
        <label for="name">nom d'utilisateur</label>
        <input type = "text" name="name"><br>
        <label for="pass">mot de passe</label>
        <input type="password" name='pass'><br>
        <input type = "submit" value="valider">
        <input type="reset" value="annuler">
    </form>
    <?
        }
    ?>
</body>
</html>