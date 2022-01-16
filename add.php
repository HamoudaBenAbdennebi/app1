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
        $req = "insert into livres (ISBN,Titre,Auteur,Quantite_disp,Annee_Edition,maison_edition) VALUES ('$isbn','$titre','$auteur','$qd','$ae','$me')";
        $resultat = mysql_query($req);
    ?>
    <h2>bibiliotheque : ajout d'un nouveau livre</h2>
    <form action="add.php" method="get">
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