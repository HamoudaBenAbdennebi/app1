<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text]{
            width:400px
        }
    </style>
</head>
<body>
    <a href="index.php">back</a>
    <?
        if(isset($_GET['ISBN'])){
            $ISBN = $_GET['ISBN'];
        }
        else
            $ISBN = "";
        $T = "";
        $A = "";
        $Q = "";
        $AE = "";
        $ME = "";
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('bibiliotheque');
        $req = "delete  from livres where ISBN = $ISBN";
        $res = mysql_query($req);
        if($res == 1)
            echo ('deleted');
        
        
    ?>
    <h2>bibiliotheque : Recherche d'un livre</h2>
    <form action="sup.php" method='get'>
        <input type="text" placeholder = 'ISBN' name='ISBN'><br>
        <input type="text" placeholder = 'titre'  disabled><br>
        <input type="text" placeholder = 'auteur'  disabled><br>
        <input type="text" placeholder = 'quantite disponble'  disabled><br>
        <input type="text" placeholder = 'annee edition'  disabled><br>
        <input type="text" placeholder = 'maison edition' ' disabled><br>
        <input type="submit" value="Rechercher">
        <input type="reset" value="annuler">
    </form>
    
</body>
</html>