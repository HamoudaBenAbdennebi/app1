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
        $req = "select * from livres where ISBN = '$ISBN'";
        $resultat = mysql_query($req);
        $c = mysql_num_rows($resultat);
        if($c == 1){
            $enreg=mysql_fetch_array($resultat);
            $T = $enreg["Titre"];
            $A = $enreg["Auteur"];
            $Q = $enreg["Quantite_disp"];
            $AE = $enreg["Annee_Edition"];
            $ME = $enreg["maison_edition"];
        }
    ?>
    <h2>bibiliotheque : Recherche d'un livre</h2>
    <form action="rech.php" method='get'>
        <input type="text" placeholder = 'ISBN' name='ISBN'><br>
        <input type="text" placeholder = 'titre' value ='<?echo $T?>' disabled><br>
        <input type="text" placeholder = 'auteur' value ='<?echo $A?>' disabled><br>
        <input type="text" placeholder = 'quantite disponble' value ='<?echo $Q?>' disabled><br>
        <input type="text" placeholder = 'annee edition' value ='<?echo $AE?>' disabled><br>
        <input type="text" placeholder = 'maison edition' value ='<?echo $ME?>' disabled><br>
        <input type="submit" value="Rechercher">
        <input type="reset" value="annuler">
    </form>
    
</body>
</html>