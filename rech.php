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
        if(isset($_GET['ISBN'])){
            $ISBN = $_GET['ISBN'];
        }
        else{
            
        }
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('bibiliotheque');
        $req = "select Username , password from users where Username = '$name' and password = '$pass'";
        $resultat = mysql_query($req);
        $c = mysql_num_rows($resultat);
    ?>
    <h2>bibiliotheque : Recherche d'un livre</h2>
    <input type="text" placeholder = 'ISBN' name='ISBN'>
    <input type="text" placeholder = 'titre'>
    <input type="text" placeholder = 'auteur'>
    <input type="text" placeholder = 'quantite disponble'>
    <input type="text" placeholder = 'annee edition'>
    <input type="text" placeholder = 'maison edition'>
</body>
</html>