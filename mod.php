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
        if(isset($_GET['isbn']) and isset($_GET['titre']) and isset($_GET['auteur']) and isset($_GET['qd']) and isset($_GET['ae']) and isset($_GET['me'])){
            $isbn = $_GET['isbn'];
            $titre = $_GET['titre'];
            $auteur = $_GET['auteur'];
            $qd = $_GET['qd'];
            $ae = $_GET['ae'];
            $me = $_GET['me'];
        }
        else{
            $isbn = "";
            $titre = "";
            $auteur = "";
            $qd = "";
            $ae = "";
            $me = "";
        }
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('bibiliotheque');
        $req = "update livres SET Titre = '$titre' , Auteur = '$auteur' ,Quantite_disp = $qd,  Annee_Edition ='$ae' , maison_edition ='$me' where ISBN = $isbn";
        $res = mysql_query($req);
        if($res == 1)
            echo ('updated');
        
        
    ?>
    <h2>bibiliotheque : Recherche d'un livre</h2>
    <form action="mod.php" method='get'>
    <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn"><br>
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre"><br>
        <label for="auteur">auteur</label>
        <input type="text" name="auteur" id="auteur"><br>
        <label for="qd">quantite disponible</label>
        <input type="text" name="qd" id="qd"><br>
        <label for="ae">Annee Edition</label>
        <input type="text" name="ae" id="ae"><br>
        <label for="me">Maison Edition</label>
        <input type="text" name="me" id="me"><br>
        <input type="submit" value="Rechercher">
        <input type="reset" value="annuler">
    </form>
    
</body>
</html>